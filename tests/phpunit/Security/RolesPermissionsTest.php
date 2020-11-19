<?php

namespace tests\phpunit\Security;

use weitzman\DrupalTestTraits\ExistingSiteBase;
use Drupal\user\Entity\Role;

/**
 * A test to confirm that roles are associated with the correct permissions.
 */
class RolesPermissionsTest extends ExistingSiteBase {

  /**
   * Determine if each role has the expected permissions.
   *
   * @group security
   * @group all
   *
   * @dataProvider expectedPerms
   */
  public function testSecurityRolesPermissions($roleMatch, $expectedPerms) {
    $role = Role::load($roleMatch);
    $permissions = NULL;

    if (isset($role)) {
      $permissions = $role->getPermissions();
      $message = "The permissions for the " . $roleMatch . " do not match the expected permissions.  Make the expected look like this, to get the test passing: \n '" . implode("',\n '", $permissions) . "'\n";
    }
    else {
      $message = 'The ' . $roleMatch . ' role is missing from the system.';
    }

    // Test assertion.
    $match = ($expectedPerms == $permissions);

    $this->assertTrue($match, $message);
  }

  /**
   * Returns expected roles and associated permissions.
   *
   * @return array
   *   Array containing all the roles in the system as an array
   */
  public function expectedPerms() {
    return [
      [
        'anonymous',
        [
          'access content',
          'access site-wide contact form',
          'view media',
        ],
      ],
      [
        'authenticated',
        [
          'access content',
          'access environment indicator',
          'access site-wide contact form',
          'access taxonomy overview',
          'add user_history entities',
          'enter documentation_page revision log entry',
          'enter event revision log entry',
          'enter event_listing revision log entry',
          'enter full_width_banner_alert revision log entry',
          'enter health_care_local_facility revision log entry',
          'enter health_care_local_health_service revision log entry',
          'enter health_care_region_detail_page revision log entry',
          'enter health_care_region_page revision log entry',
          'enter landing_page revision log entry',
          'enter news_story revision log entry',
          'enter office revision log entry',
          'enter outreach_asset revision log entry',
          'enter page revision log entry',
          'enter person_profile revision log entry',
          'enter press_release revision log entry',
          'enter publication_listing revision log entry',
          'enter regional_health_care_service_des revision log entry',
          'enter support_service revision log entry',
          'enter va_form revision log entry',
          'enter vamc_operating_status_and_alerts revision log entry',
          'execute graphql requests',
          'execute persisted graphql requests',
          'override event authored on option',
          'override full_width_banner_alert published option',
          'override news_story authored on option',
          'override outreach_asset authored on option',
          'override press_release authored on option',
          'view media',
        ],
      ],
      [
        'content_admin',
        [
          'access administration pages',
          'access alert_blocks entity browser pages',
          'access benefit_hub_contact_information entity browser pages',
          'access files overview',
          'access image_browser entity browser pages',
          'access lc_benefit_hubs entity browser pages',
          'access media entity browser pages',
          'access media overview',
          'access media_browser entity browser pages',
          'access q_a_browser entity browser pages',
          'access toolbar',
          'access user profiles',
          'access vamc_operating_statuses entity browser pages',
          'administer menu',
          'administer nodes',
          'administer taxonomy',
          'break content lock',
          'bypass node access',
          'bypass workbench access',
          'clone block entity',
          'clone block_content entity',
          'clone field_config entity',
          'clone file entity',
          'clone media entity',
          'clone menu entity',
          'clone node entity',
          'clone paragraph entity',
          'create alert block content',
          'create campaign_landing_page content',
          'create document media',
          'create image media',
          'create media',
          'create promo block content',
          'create url aliases',
          'create video media',
          'delete any alert block content',
          'delete any document media',
          'delete any image media',
          'delete any media',
          'delete any promo block content',
          'delete any video media',
          'delete media',
          'delete own document media',
          'delete own image media',
          'delete own video media',
          'edit any document media',
          'edit any image media',
          'edit any video media',
          'edit own document media',
          'edit own image media',
          'edit own video media',
          'execute entity:break_lock node',
          'execute publish_latest_revision_action node',
          'execute views_bulk_edit all',
          'export tablefield',
          'import tablefield',
          'link to any page',
          'manipulate all entityqueues',
          'manipulate entityqueues',
          'notify of path changes',
          'override all authored by option',
          'rebuild tablefield',
          'update any alert block content',
          'update any media',
          'update any promo block content',
          'update media',
          'use editorial transition approve',
          'use editorial transition archive',
          'use editorial transition archived_published',
          'use editorial transition create_new_draft',
          'use editorial transition publish',
          'use editorial transition review',
          'use editorial transition stage_for_publishing',
          'use moderation sidebar',
          'use text format rich_text',
          'use text format rich_text_limited',
          'use workbench access',
          'va gov deploy content build',
          'view all media revisions',
          'view any unpublished content',
          'view cms_help_center in toolbar',
          'view latest version',
          'view node link report',
          'view sections in toolbar',
          'view the administration theme',
          'view unpublished paragraphs',
          'view workbench access information',
        ],
      ],
      [
        'content_api_consumer',
        [
          'access bulletin queue trigger api',
          'access openapi api docs',
          'administer menu',
          'use graphql explorer',
          'use graphql voyager',
          'view any unpublished content',
          'view own unpublished content',
        ],
      ],
      [
        'content_creator_benefits_hubs',
        [
          'access alert_blocks entity browser pages',
          'access benefit_hub_contact_information entity browser pages',
          'access files overview',
          'access lc_benefit_hubs entity browser pages',
          'access media entity browser pages',
          'access q_a_browser entity browser pages',
          'clone block entity',
          'clone block_content entity',
          'clone field_config entity',
          'clone file entity',
          'clone media entity',
          'clone menu entity',
          'clone node entity',
          'clone paragraph entity',
          'create alert block content',
          'create landing_page content',
          'create page content',
          'create promo block content',
          'create support_service content',
          'view node link report',
        ],
      ],
      [
        'content_creator_resources_and_support',
        [
          'access alert_blocks entity browser pages',
          'access benefit_hub_contact_information entity browser pages',
          'access files overview',
          'access lc_benefit_hubs entity browser pages',
          'access media entity browser pages',
          'access q_a_browser entity browser pages',
          'clone block entity',
          'clone block_content entity',
          'clone field_config entity',
          'clone file entity',
          'clone media entity',
          'clone menu entity',
          'clone node entity',
          'clone paragraph entity',
          'create alert block content',
          'create checklist content',
          'create faq_multiple_q_a content',
          'create media_list_images content',
          'create media_list_videos content',
          'create promo block content',
          'create q_a content',
          'create step_by_step content',
          'create support_resources_detail_page content',
          'view node link report',
        ],
      ],
      [
        'content_editor',
        [
          'access administration pages',
          'access alert_blocks entity browser pages',
          'access benefit_hub_contact_information entity browser pages',
          'access content overview',
          'access files overview',
          'access image_browser entity browser pages',
          'access lc_benefit_hubs entity browser pages',
          'access media entity browser pages',
          'access media overview',
          'access media_browser entity browser pages',
          'access q_a_browser entity browser pages',
          'access shortcuts',
          'access toolbar',
          'access user profiles',
          'access vamc_operating_statuses entity browser pages',
          'administer menu',
          'break content lock',
          'create alert block content',
          'create document media',
          'create image media',
          'create media',
          'create promo block content',
          'create video media',
          'delete media',
          'edit any checklist content',
          'edit any document media',
          'edit any documentation_page content',
          'edit any event content',
          'edit any event_listing content',
          'edit any faq_multiple_q_a content',
          'edit any full_width_banner_alert content',
          'edit any health_care_local_facility content',
          'edit any health_care_local_health_service content',
          'edit any health_care_region_detail_page content',
          'edit any health_care_region_page content',
          'edit any health_services_listing content',
          'edit any image media',
          'edit any landing_page content',
          'edit any leadership_listing content',
          'edit any locations_listing content',
          'edit any media_list_images content',
          'edit any media_list_videos content',
          'edit any news_story content',
          'edit any office content',
          'edit any outreach_asset content',
          'edit any page content',
          'edit any person_profile content',
          'edit any press_release content',
          'edit any press_releases_listing content',
          'edit any publication_listing content',
          'edit any q_a content',
          'edit any regional_health_care_service_des content',
          'edit any step_by_step content',
          'edit any story_listing content',
          'edit any support_resources_detail_page content',
          'edit any support_service content',
          'edit any va_form content',
          'edit any vamc_operating_status_and_alerts content',
          'edit any video media',
          'edit own documentation_page content',
          'edit own event content',
          'edit own event_listing content',
          'edit own full_width_banner_alert content',
          'edit own health_care_local_facility content',
          'edit own health_care_local_health_service content',
          'edit own health_care_region_detail_page content',
          'edit own health_care_region_page content',
          'edit own health_services_listing content',
          'edit own landing_page content',
          'edit own locations_listing content',
          'edit own news_story content',
          'edit own office content',
          'edit own outreach_asset content',
          'edit own page content',
          'edit own person_profile content',
          'edit own press_release content',
          'edit own press_releases_listing content',
          'edit own publication_listing content',
          'edit own regional_health_care_service_des content',
          'edit own story_listing content',
          'edit own support_service content',
          'edit own va_form content',
          'edit own vamc_operating_status_and_alerts content',
          'execute entity:break_lock node',
          'notify of path changes',
          'rebuild tablefield',
          'schedule editorial transition create_new_draft',
          'update any alert block content',
          'update any media',
          'update any promo block content',
          'update media',
          'use editorial transition create_new_draft',
          'use editorial transition review',
          'use moderation sidebar',
          'use text format rich_text',
          'use text format rich_text_limited',
          'use workbench access',
          'view all media revisions',
          'view all revisions',
          'view any unpublished content',
          'view checklist revisions',
          'view cms_help_center in toolbar',
          'view event revisions',
          'view event_listing revisions',
          'view faq_multiple_q_a revisions',
          'view full_width_banner_alert revisions',
          'view health_care_local_facility revisions',
          'view health_care_local_health_service revisions',
          'view health_care_region_detail_page revisions',
          'view health_care_region_page revisions',
          'view landing_page revisions',
          'view latest version',
          'view media_list_images revisions',
          'view media_list_videos revisions',
          'view news_story revisions',
          'view node link report',
          'view office revisions',
          'view outreach_asset revisions',
          'view own unpublished content',
          'view page revisions',
          'view person_profile revisions',
          'view press_release revisions',
          'view publication_listing revisions',
          'view q_a revisions',
          'view regional_health_care_service_des revisions',
          'view sections in toolbar',
          'view step_by_step revisions',
          'view support_resources_detail_page revisions',
          'view support_service revisions',
          'view the administration theme',
          'view unpublished paragraphs',
          'view va_form revisions',
          'view vamc_operating_status_and_alerts revisions',
          'view workbench access information',
        ],
      ],
      [
        'content_reviewer',
        [
          'access administration pages',
          'access alert_blocks entity browser pages',
          'access benefit_hub_contact_information entity browser pages',
          'access content overview',
          'access files overview',
          'access image_browser entity browser pages',
          'access lc_benefit_hubs entity browser pages',
          'access media entity browser pages',
          'access media overview',
          'access media_browser entity browser pages',
          'access q_a_browser entity browser pages',
          'access shortcuts',
          'access toolbar',
          'access user profiles',
          'access vamc_operating_statuses entity browser pages',
          'administer menu',
          'break content lock',
          'create alert block content',
          'create document media',
          'create image media',
          'create media',
          'create promo block content',
          'create video media',
          'delete media',
          'edit any checklist content',
          'edit any document media',
          'edit any documentation_page content',
          'edit any event content',
          'edit any event_listing content',
          'edit any faq_multiple_q_a content',
          'edit any full_width_banner_alert content',
          'edit any health_care_local_facility content',
          'edit any health_care_local_health_service content',
          'edit any health_care_region_detail_page content',
          'edit any health_care_region_page content',
          'edit any image media',
          'edit any landing_page content',
          'edit any leadership_listing content',
          'edit any media_list_images content',
          'edit any media_list_videos content',
          'edit any news_story content',
          'edit any office content',
          'edit any outreach_asset content',
          'edit any page content',
          'edit any person_profile content',
          'edit any press_release content',
          'edit any publication_listing content',
          'edit any q_a content',
          'edit any regional_health_care_service_des content',
          'edit any step_by_step content',
          'edit any support_resources_detail_page content',
          'edit any support_service content',
          'edit any va_form content',
          'edit any vamc_operating_status_and_alerts content',
          'edit any video media',
          'edit own documentation_page content',
          'edit own event content',
          'edit own event_listing content',
          'edit own full_width_banner_alert content',
          'edit own health_care_local_facility content',
          'edit own health_care_local_health_service content',
          'edit own health_care_region_detail_page content',
          'edit own health_care_region_page content',
          'edit own landing_page content',
          'edit own news_story content',
          'edit own office content',
          'edit own outreach_asset content',
          'edit own page content',
          'edit own person_profile content',
          'edit own press_release content',
          'edit own publication_listing content',
          'edit own regional_health_care_service_des content',
          'edit own support_service content',
          'edit own va_form content',
          'edit own vamc_operating_status_and_alerts content',
          'execute entity:break_lock node',
          'notify of path changes',
          'rebuild tablefield',
          'schedule editorial transition create_new_draft',
          'update any alert block content',
          'update any media',
          'update any promo block content',
          'update media',
          'use editorial transition approve',
          'use editorial transition create_new_draft',
          'use editorial transition review',
          'use editorial transition stage_for_publishing',
          'use moderation sidebar',
          'use text format rich_text',
          'use text format rich_text_limited',
          'use workbench access',
          'view all media revisions',
          'view all revisions',
          'view any unpublished content',
          'view checklist revisions',
          'view cms_help_center in toolbar',
          'view event revisions',
          'view event_listing revisions',
          'view faq_multiple_q_a revisions',
          'view full_width_banner_alert revisions',
          'view health_care_local_facility revisions',
          'view health_care_local_health_service revisions',
          'view health_care_region_detail_page revisions',
          'view health_care_region_page revisions',
          'view landing_page revisions',
          'view latest version',
          'view media_list_images revisions',
          'view media_list_videos revisions',
          'view news_story revisions',
          'view node link report',
          'view office revisions',
          'view outreach_asset revisions',
          'view own unpublished content',
          'view page revisions',
          'view person_profile revisions',
          'view press_release revisions',
          'view publication_listing revisions',
          'view q_a revisions',
          'view regional_health_care_service_des revisions',
          'view sections in toolbar',
          'view step_by_step revisions',
          'view support_resources_detail_page revisions',
          'view support_service revisions',
          'view the administration theme',
          'view unpublished paragraphs',
          'view va_form revisions',
          'view vamc_operating_status_and_alerts revisions',
          'view workbench access information',
        ],
      ],
      [
        'content_publisher',
        [
          'access administration pages',
          'access alert_blocks entity browser pages',
          'access benefit_hub_contact_information entity browser pages',
          'access content overview',
          'access files overview',
          'access image_browser entity browser pages',
          'access lc_benefit_hubs entity browser pages',
          'access media entity browser pages',
          'access media overview',
          'access media_browser entity browser pages',
          'access q_a_browser entity browser pages',
          'access shortcuts',
          'access toolbar',
          'access user profiles',
          'access vamc_operating_statuses entity browser pages',
          'administer menu',
          'break content lock',
          'create alert block content',
          'create document media',
          'create image media',
          'create media',
          'create promo block content',
          'create terms in health_care_service_taxonomy',
          'create video media',
          'delete any alert block content',
          'delete any document media',
          'delete any event content',
          'delete any event_listing content',
          'delete any full_width_banner_alert content',
          'delete any health_care_local_facility content',
          'delete any health_care_local_health_service content',
          'delete any health_care_region_detail_page content',
          'delete any image media',
          'delete any media',
          'delete any news_story content',
          'delete any office content',
          'delete any outreach_asset content',
          'delete any person_profile content',
          'delete any press_release content',
          'delete any promo block content',
          'delete any publication_listing content',
          'delete any regional_health_care_service_des content',
          'delete any support_service content',
          'delete any va_form content',
          'delete any video media',
          'delete media',
          'delete own document media',
          'delete own documentation_page content',
          'delete own event content',
          'delete own event_listing content',
          'delete own full_width_banner_alert content',
          'delete own health_care_local_facility content',
          'delete own health_care_local_health_service content',
          'delete own health_care_region_detail_page content',
          'delete own image media',
          'delete own landing_page content',
          'delete own news_story content',
          'delete own office content',
          'delete own outreach_asset content',
          'delete own page content',
          'delete own person_profile content',
          'delete own press_release content',
          'delete own publication_listing content',
          'delete own regional_health_care_service_des content',
          'delete own support_service content',
          'delete own va_form content',
          'delete own video media',
          'delete terms in health_care_service_taxonomy',
          'edit any checklist content',
          'edit any document media',
          'edit any documentation_page content',
          'edit any event content',
          'edit any event_listing content',
          'edit any faq_multiple_q_a content',
          'edit any full_width_banner_alert content',
          'edit any health_care_local_facility content',
          'edit any health_care_local_health_service content',
          'edit any health_care_region_detail_page content',
          'edit any health_care_region_page content',
          'edit any health_services_listing content',
          'edit any image media',
          'edit any landing_page content',
          'edit any leadership_listing content',
          'edit any locations_listing content',
          'edit any media_list_images content',
          'edit any media_list_videos content',
          'edit any news_story content',
          'edit any office content',
          'edit any outreach_asset content',
          'edit any page content',
          'edit any person_profile content',
          'edit any press_release content',
          'edit any publication_listing content',
          'edit any q_a content',
          'edit any regional_health_care_service_des content',
          'edit any step_by_step content',
          'edit any story_listing content',
          'edit any support_resources_detail_page content',
          'edit any support_service content',
          'edit any va_form content',
          'edit any vamc_operating_status_and_alerts content',
          'edit any video media',
          'edit own document media',
          'edit own documentation_page content',
          'edit own event content',
          'edit own event_listing content',
          'edit own full_width_banner_alert content',
          'edit own health_care_local_facility content',
          'edit own health_care_local_health_service content',
          'edit own health_care_region_detail_page content',
          'edit own health_care_region_page content',
          'edit own health_services_listing content',
          'edit own image media',
          'edit own landing_page content',
          'edit own leadership_listing content',
          'edit own locations_listing content',
          'edit own news_story content',
          'edit own office content',
          'edit own outreach_asset content',
          'edit own page content',
          'edit own person_profile content',
          'edit own press_release content',
          'edit own press_releases_listing content',
          'edit own publication_listing content',
          'edit own regional_health_care_service_des content',
          'edit own story_listing content',
          'edit own support_service content',
          'edit own va_form content',
          'edit own vamc_operating_status_and_alerts content',
          'edit own video media',
          'edit terms in health_care_service_taxonomy',
          'execute entity:break_lock node',
          'execute publish_latest_revision_action node',
          'execute views_bulk_edit all',
          'notify of path changes',
          'rebuild tablefield',
          'revert all revisions',
          'revert checklist revisions',
          'revert event revisions',
          'revert event_listing revisions',
          'revert faq_multiple_q_a revisions',
          'revert full_width_banner_alert revisions',
          'revert health_care_local_facility revisions',
          'revert health_care_local_health_service revisions',
          'revert health_care_region_detail_page revisions',
          'revert health_care_region_page revisions',
          'revert landing_page revisions',
          'revert media_list_images revisions',
          'revert media_list_videos revisions',
          'revert news_story revisions',
          'revert office revisions',
          'revert outreach_asset revisions',
          'revert page revisions',
          'revert person_profile revisions',
          'revert press_release revisions',
          'revert publication_listing revisions',
          'revert q_a revisions',
          'revert regional_health_care_service_des revisions',
          'revert step_by_step revisions',
          'revert support_resources_detail_page revisions',
          'revert support_service revisions',
          'revert va_form revisions',
          'revert vamc_operating_status_and_alerts revisions',
          'schedule editorial transition archive',
          'schedule editorial transition archived_published',
          'schedule editorial transition create_new_draft',
          'schedule editorial transition publish',
          'update any alert block content',
          'update any media',
          'update any promo block content',
          'update media',
          'use editorial transition approve',
          'use editorial transition archive',
          'use editorial transition archived_published',
          'use editorial transition create_new_draft',
          'use editorial transition publish',
          'use editorial transition review',
          'use editorial transition stage_for_publishing',
          'use moderation sidebar',
          'use text format rich_text',
          'use text format rich_text_limited',
          'use workbench access',
          'va gov deploy content build',
          'view all media revisions',
          'view all revisions',
          'view any unpublished content',
          'view checklist revisions',
          'view cms_help_center in toolbar',
          'view event revisions',
          'view event_listing revisions',
          'view faq_multiple_q_a revisions',
          'view full_width_banner_alert revisions',
          'view health_care_local_facility revisions',
          'view health_care_local_health_service revisions',
          'view health_care_region_detail_page revisions',
          'view health_care_region_page revisions',
          'view landing_page revisions',
          'view latest version',
          'view media_list_images revisions',
          'view media_list_videos revisions',
          'view news_story revisions',
          'view node link report',
          'view office revisions',
          'view outreach_asset revisions',
          'view own unpublished content',
          'view page revisions',
          'view person_profile revisions',
          'view press_release revisions',
          'view publication_listing revisions',
          'view q_a revisions',
          'view regional_health_care_service_des revisions',
          'view sections in toolbar',
          'view step_by_step revisions',
          'view support_resources_detail_page revisions',
          'view support_service revisions',
          'view the administration theme',
          'view unpublished paragraphs',
          'view va_form revisions',
          'view vamc_operating_status_and_alerts revisions',
          'view workbench access information',
        ],
      ],
      [
        'admnistrator_users',
        [
          'access administration pages',
          'access content overview',
          'access files overview',
          'access shortcuts',
          'access toolbar',
          'administer menu',
          'administer nodes',
          'administer users',
          'assign content_admin role',
          'assign content_api_consumer role',
          'assign content_creator_benefits_hubs role',
          'assign content_creator_resources_and_support role',
          'assign content_editor role',
          'assign content_publisher role',
          'assign content_reviewer role',
          'assign redirect_administrator role',
          'assign selected workbench access',
          'assign vamc_content_creator role',
          'batch update workbench access',
          'break content lock',
          'bypass password policies',
          'bypass workbench access',
          'create terms in administration',
          'delete terms in administration',
          'edit terms in administration',
          'execute user_add_role_action user',
          'manage password reset',
          'notify of path changes',
          'use text format rich_text',
          'use text format rich_text_limited',
          'view cms_help_center in toolbar',
          'view node link report',
          'view sections in toolbar',
          'view the administration theme',
          'view workbench access information',
        ],
      ],
      [
        'vamc_content_creator',
        [
          'access alert_blocks entity browser pages',
          'access benefit_hub_contact_information entity browser pages',
          'access files overview',
          'access lc_benefit_hubs entity browser pages',
          'access media entity browser pages',
          'access q_a_browser entity browser pages',
          'clone block entity',
          'clone block_content entity',
          'clone field_config entity',
          'clone file entity',
          'clone media entity',
          'clone menu entity',
          'clone node entity',
          'clone paragraph entity',
          'create alert block content',
          'create event content',
          'create full_width_banner_alert content',
          'create health_care_local_facility content',
          'create health_care_local_health_service content',
          'create health_care_region_detail_page content',
          'create news_story content',
          'create outreach_asset content',
          'create person_profile content',
          'create press_release content',
          'create promo block content',
          'create regional_health_care_service_des content',
          'view node link report',
        ],
      ],
    ];
  }

}
