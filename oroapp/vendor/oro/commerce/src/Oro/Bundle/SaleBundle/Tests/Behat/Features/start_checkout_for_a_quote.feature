@ticket-BB-7459
@automatically-ticket-tagged
@fixture-OroSaleBundle:QuoteOrder.yml
Feature: Start checkout for a quote
  In order to provide customers with ability to quote products
  As customer
  I need to be able to start checkout for a quote

  Scenario: FrontOffice scenario background
    Given I login as AmandaRCole@example.org buyer
    And I request a quote from shopping list "Shopping List 1" with data:
      | PO Number | PONUMBER1 |

  Scenario: BackOffice scenario background
    Given I login as administrator
    And I create a quote from RFQ with PO Number "PONUMBER1"
    And I click "Send to Customer"
    And I click "Send"

  Scenario: Verify "All Quotes" grid
    Given I am on homepage
    When I click "Quotes"
    Then I shouldn't see "Status" column in frontend grid
    And I shouldn't see "Status" filter in frontend grid
    When I show column "Status" in frontend grid
    And I show filter "Status" in frontend grid
    Then I should see "Status" column in frontend grid
    And I should see "Status" filter in frontend grid

  Scenario: Start checkout
    Given I click view PONUMBER1 in grid
    And I press "Accept and Submit to Order"
    And I press "Submit"
    Then Buyer is on enter billing information checkout step
