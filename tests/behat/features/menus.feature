@api
Feature: Menu links appear as expected.
      """
      @TODO: When header integration work is complete,
      test changing of menu items in cms being mapped to website build.
      """
    In order to confirm menu item existence
    I need to build front end
    And check for presence of all menu items

  @frontend_menus
  Scenario: Build front end and check for presence of all menu items.
    When I run "cd .. && composer va:web:build"
    And I am at "/static/health-care"
    Then I should see "VA Benefits and Health Care"
    And I should see "About VA health benefits"
    And I should see "How to apply"
    And I should see "Family and caregiver health benefits"
    And I should see "Apply now for health care"
    And I should see "Manage your health"
    And I should see "Refill and track your prescriptions"
    And I should see "Send a secure message to your health care team"
    And I should see "Schedule and view VA appointments"
    And I should see "View your lab and test results"
    And I should see "Order hearing aid batteries and prosthetic socks"
    And I should see "health care"
    And I should see "The MISSION Act and VA health care"
    And I should see "Get disability benefits"
    And I should see "Eligibility"
    And I should see "How to file a claim"
    And I should see "Survivor and dependent compensation (DIC)"
    And I should see "Manage your benefits"
    And I should see "Check your claim or appeal status"
    And I should see "View your VA payment history"
    And I should see "Upload evidence to support your claim"
    And I should see "File for a VA disability increase"
    And I should see "File an appeal"
    And I should see "Fully Developed Claims Program"
    And I should see "Get education benefits"
    And I should see "About GI Bill benefits"
    And I should see "Eligibility"
    And I should see "How to apply"
    And I should see "Vocational Rehabilitation and Employment"
    And I should see "Survivor and dependent education benefits"
    And I should see "Manage your benefits"
    And I should see "View your VA payment history"
    And I should see "Check your Post-9/11 GI Bill benefits"
    And I should see "Transfer your Post-9/11 GI Bill benefits"
    And I should see "Change your GI Bill school or program"
    And I should see "Change your direct deposit information"
    And I should see "GI Bill School Feedback"
    And I should see "Careers and employment"
    And I should see "Get employment benefits"
    And I should see "About Vocational Rehabilitation and Employment"
    And I should see "Veteran-owned small business support"
    And I should see "Manage your career"
    And I should see "VA transition assistance"
    And I should see "CareerScope assessment"
    And I should see "Find a job"
    And I should see "Find VA careers and support"
    And I should see "Print your civil service preference letter"
    And I should see "VA for Vets"
    And I should see "Get pension benefits"
    And I should see "Veterans Pension eligibility"
    And I should see "Aid and attendance benefits and housebound allowance"
    And I should see "Survivors Pension"
    And I should see "Apply now for a Veterans Pension"
    And I should see "Manage your benefits"
    And I should see "Check your claim or appeal status"
    And I should see "View your VA payment history"
    And I should see "Change your address"
    And I should see "Change your direct deposit information"
    And I should see "Electronic Pension Payments"
    And I should see "Get your pension payments electronically"
    And I should see "Housing assistance"
    And I should see "Get home loan benefits"
    And I should see "About VA home loan types"
    And I should see "Check your appeal status"
    And I should see "How to apply for your COE"
    And I should see "Get Veterans housing grants"
    And I should see "About disability housing grants"
    And I should see "Check your SAH claim status"
    And I should see "How to apply for an SAH grant"
    And I should see "National Call Center for Homeless Veterans"
    And I should see "Get life insurance"
    And I should see "About life insurance options"
    And I should see "Benefits for totally disabled or terminally ill policyholders"
    And I should see "Beneficiary financial counseling and online will preparation"
    And I should see "Manage your life insurance"
    And I should see "Access your policy online"
    And I should see "Update your beneficiaries"
    And I should see "File a claim for insurance benefits"
    And I should see "Check your appeal status"
    And I should see "Life insurance"
    And I should see "SGLI Online Enrollment System (SOES)"
    And I should see "SGLI Online Enrollment System (SOES)"
    And I should see "Get burial benefits"
    And I should see "Eligibility"
    And I should see "Pre-need burial eligibility determination"
    And I should see "Veteran burial allowance"
    And I should see "Memorial items"
    And I should see "Survivor and dependent compensation (DIC)"
    And I should see "Plan a burial"
    And I should see "Plan a burial for a family member"
    And I should see "Schedule a burial in a VA national cemetery"
    And I should see "Find a cemetery"
    And I should see "Request military records (DD214)"
    And I should see "burials and memorials"
    And I should see "National Cemetery Administration Mobile Site"
    And I should see "National Cemetery Administration mobile site"
    And I should see "Get your records"
    And I should see "Get your VA medical records (Blue Button)"
    And I should see "Download your VA benefit letters"
    And I should see "Learn how to apply for a home loan COE"
    And I should see "Get Veteran ID cards"
    And I should see "Request your military records (DD214)"
    And I should see "Change your address"
    And I should see "How to apply for a discharge upgrade"
    And I should see "View your VA payment history"
    And I should see "Search historical military records (National Archives)"
    And I should see "Veteran ID Card"
    And I should see "Confirm your VA benefit status"
    And I should see "Service member benefits"
    And I should see "Family member benefits"
    And I should see "About VA"
    And I should see "VA organizations"
    And I should see "Veterans Health Administration"
    And I should see "Veterans Benefits Administration"
    And I should see "National Cemetery Administration"
    And I should see "VA Leadership"
    And I should see "Public Affairs"
    And I should see "Congressional Affairs"
    And I should see "All VA offices and organizations"
    And I should see "Innovation at VA"
    And I should see "Health research"
    And I should see "Public health"
    And I should see "Veterans Choice Program"
    And I should see "VA open data"
    And I should see "Veterans analysis and statistics"
    And I should see "Appeals modernization"
    And I should see "VA Innovation Center"
    And I should see "Recovery Act"
    And I should see "Learn about VA"
    And I should see "About VA"
    And I should see "History of VA"
    And I should see "VA plans, budget, and performance"
    And I should see "National cemetery history program"
    And I should see "Veterans legacy program"
    And I should see "Volunteer or donate"
    And I should see "Agency Financial Report"
    And I should see "Agency financial report"
    And I should see "Find a VA Location"




