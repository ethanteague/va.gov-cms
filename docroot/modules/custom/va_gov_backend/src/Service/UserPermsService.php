<?php

namespace Drupal\va_gov_backend\Service;

use Drupal\Core\Session\AccountInterface;
use Drupal\user\Entity\User;
use Drupal\workbench_access\Entity\AccessSchemeInterface;
use Drupal\Core\Access\AccessResult;

/**
 * For exporting User access status to service.
 */
class UserPermsService {

  /**
   * The active user.
   *
   * @var object
   *  The user object.
   */
  private $currentUser;

  /**
   * UserPermsService constructor.
   */
  public function __construct(AccountInterface $currentUser) {
    $this->currentUser = $currentUser;
  }

  /**
   * Returns a Drupal user ID.
   */
  public function userId() {
    return $this->currentUser->id();
  }

  /**
   * Returns a Drupal username.
   */
<<<<<<< HEAD
  public function userOptionsStorage(array &$form, array $targets, $user_id) {
    $allowed_options = [];
    // Return allowed form field options by filtering disallowed items.
    foreach ($targets as $target) {

      if (in_array($target, $form) && !empty($form[$target]['widget']['#options'])) {
        $cid = 'userpermservice-dropdown-access-' . $target . '-' . $user_id;

        $cached_data = \Drupal::cache()->get($cid);
        // If we have a cache, return it.
        if (!empty($cached_data)) {
          $allowed_options = $cached_data->data;
        }
        else {
          $target_allowed_options = [];
          foreach ($form[$target]['widget']['#options'] as $header_key => $option_header) {
            if (!is_array($option_header) && !empty($option_header)) {
              // Exception for one level select fields that don't
              // have opt groups.
              $access = $this->userAccess($header_key, 'node', $user_id);
              if ($access) {
                $target_allowed_options[] = $header_key;
              }
            }
            elseif (is_array($option_header) && !empty($option_header)) {
              foreach ($option_header as $option_key => $option_item) {
                $access = $this->userAccess($option_key, 'node', $user_id);

                if ($access) {
                  $target_allowed_options[] = $option_key;
                }
              }
            }
          }
          $tags = [
            'va_gov_backend_user_perms',
            'user:' . $user_id,
          ];
          // Cache for 24 hours.
          $expire_time = time() + 24 * 60 * 60;
          \Drupal::cache()->set($cid, $target_allowed_options, $expire_time, $tags);
          $allowed_options = array_merge($target_allowed_options, $allowed_options);
        }
      }
    }
=======
  public function userName() {
    return $this->currentUser->getDisplayName();
  }
>>>>>>> VACMS-930: Removing custom service related modules and adding to existing module.

  /**
   * Returns a Drupal user's roles.
   */
  public function userRoles() {
    return $this->currentUser->getRoles();
  }

  /**
   * Returns true if user has perm.
   */
  public function userPerm(String $permString) {
    return $this->currentUser->hasPermission($permString);
  }

  /**
   * Return an access status string for entity.
   *
   * @param string $entity_id
   *   The entity id.
   * @param string $entity_type
   *   E.g. node, block.
   * @param string $user_id
   *   The user id.
   * @param string $op
   *   E.g., create, update, delete.
   *
   * @return string
   *   Access will be TRUE or FALSE.
   */
  public function userAccess($entity_id, $entity_type, $user_id = NULL, $op = NULL) {

<<<<<<< HEAD
    // When using entity reference view as a source for field options,
    // first option has key '_none' and should be ignored in access checks.
    if ($entity_id === '_none') {
      return TRUE;
    }

    $entity = $this->entityInterface->getStorage($entity_type)->load($entity_id);
=======
    $account = $this->currentUser;
    // If uid passed, use it.
    if (!empty($user_id)) {
      $account = User::load($user_id);
    }
    $entity = \Drupal::entityTypeManager()->getStorage($entity_type)->load($entity_id);
>>>>>>> VACMS-930: Removing custom service related modules and adding to existing module.

    // If op is passed, use it.
    if (empty($op)) {
      $op = 'create';
    }

    // Special snowflake check for Outreach section - unique perms set beyond
    // scope of workbench_access.
    $database = \Drupal::database();
    $query = $database->select('section_association__user_id', 's');
    $query->condition('s.user_id_target_id', $account->id());
    $query->condition('s.entity_id', 4);
    $query->fields('s', ['entity_id']);
    $results = $query->execute()->fetchAll();
    if (count($results) > 0) {
      return TRUE;
    }

    // Compare user sections against subject section to determine access.
    return array_reduce(\Drupal::entityTypeManager()->getStorage('access_scheme')->loadMultiple(), function (AccessResult $carry, AccessSchemeInterface $scheme) use ($entity, $op, $account) {
      $status_class_name = get_class($scheme->getAccessScheme()->checkEntityAccess($scheme, $entity, $op, $account));
      if ($status_class_name === 'Drupal\Core\Access\AccessResultForbidden') {
        return FALSE;
      }
      return TRUE;
    }, AccessResult::neutral());

  }

}
