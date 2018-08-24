@regression
@ticket-BB-9302
@ticket-BB-10781
@automatically-ticket-tagged
@fixture-OroProductBundle:Products_view_page_templates.yml
Feature: Product View Page Templates

  In order to modify look and feel of the product view page
  As an Administrator
  I want to select a product view page template
  As an Buyer
  I should see selected a product view page template

  # Preconditions:
  #   Product attribute:
  #     Field Name: Color
  #     Type: Select
  #     Options:
  #       Green
  #       Red

  #   Product attribute:
  #     Field Name: Size
  #     Type: Select
  #     Options:
  #       L
  #       M

  #   Product attribute:
  #     Field Name: Remark
  #     Type: Text

  #     Attribute Group: Color Group with Color attribute
  #     Attribute Group: Size Group with Size attribute
  #     Attribute Group: Remark Group with Remark attribute

  #  Product1:
  #    type: Simple
  #    name: Green shirt L
  #    sku: gtsh_l
  #    product status: enabled
  #    inventory status: in stock
  #    unit Of Quantity: item
  #    additional Units: set
  #    price list:
  #    Default Price List	1	item	10.0000	USD
  #    Default Price List	1	set	   445.5000	USD
  #    color: Green
  #    size: L
  #    remark: Test text for Green simple product

  #  Product2:
  #    type: Simple
  #    name: Red_shirt M
  #    sku: rtsh_m
  #    product status: enabled
  #    inventory status: in stock
  #    unit Of Quantity: item
  #    additional Units: set
  #    price list:
  #    Default Price List	1	item	7.0000	USD
  #    Default Price List	1	set	   432.30	USD
  #    color: Red
  #    size: M
  #    remark: Test text for Red simple product

  #   Configurable product:
  #    variant fields: Size, Color
  #    name: Shirt_1
  #    sku: shirt_main
  #    product status: enabled
  #    unit Of Quantity: item
  #    additional Units: set
  #    variant: Green shirt L
  #    variant: Red shirt M
  #    remark: Test text for configurable product

  Scenario: Prepare product attributes
    Given I login as AmandaRCole@example.org the "Buyer" at "first_session" session
    And I login as administrator and use in "second_session" as "Admin"

    # Create Color attribute
    And I go to Products / Product Attributes
    And I click "Create Attribute"
    And I fill form with:
      | Field Name | Color  |
      | Type       | Select |
    And I click "Continue"
    And set Options with:
      | Label  |
      | Green  |
      | Red    |
    And I save form
    Then I should see "Attribute was successfully saved" flash message

    # Create Size attribute
    And I go to Products / Product Attributes
    And I click "Create Attribute"
    And I fill form with:
      | Field Name | Size   |
      | Type       | Select |
    And I click "Continue"
    And set Options with:
      | Label  |
      | L      |
      | M      |
    And I save form
    Then I should see "Attribute was successfully saved" flash message

    # Create Remark attribute
    And I go to Products / Product Attributes
    And I click "Create Attribute"
    And I fill form with:
      | Field Name | Remark |
      | Type       | Text   |
    And I click "Continue"
    And I save form
    Then I should see "Attribute was successfully saved" flash message

    # Update schema
    And I go to Products / Product Attributes
    And I confirm schema update

    # Update attribute families
    And I go to Products / Product Families
    And I click Edit Default in grid
    And set Attribute Groups with:
      | Label         | Visible | Attributes |
      | Color group   | true    | [Color]    |
      | Size group    | true    | [Size]     |
      | Remark group  | true    | [Remark]   |
    And I save form
    Then I should see "Successfully updated" flash message

  Scenario: Prepare configurable products
    And I go to Products / Products
    And I click Edit gtsh_l in grid
    And I fill "ProductForm" with:
      | Color  | Green |
      | Size   | L     |
      | Remark | Test text for Green simple product |
    And I save form
    Then I should see "Product has been saved" flash message

    And I go to Products / Products
    And I click Edit rtsh_m in grid
    And I fill "ProductForm" with:
      | Color  | Red     |
      | Size   | M       |
      | Remark | Test text for Red simple product |
    And I save form
    Then I should see "Product has been saved" flash message

    And I go to Products / Products
    And I click Edit shirt_main in grid
    And I fill "ProductForm" with:
      | Configurable Attributes | [Color, Size]                      |
      | Remark                  | Test text for configurable product |
    And I save form
    Then I should see "Product has been saved" flash message
    And I go to Products / Products
    And I click Edit shirt_main in grid
    And I check gtsh_l and rtsh_m in grid
    And I save form
    Then I should see "Product has been saved" flash message

  Scenario: Open, fill and submit Matrix Order Form
    Given I operate as the Buyer
    And I open product with sku "shirt_main" on the store frontend
    Then I should see an "Matrix Grid Form" element
    And I should see "Green"
    And I should see "Red"
    And I should see "Total QTY"
    And I type "1" in "matrix_collection[rows][0][columns][0][quantity]"
    And I type "2" in "matrix_collection[rows][1][columns][1][quantity]"
    And I should see "$24.00"
    And I click "Add to Shopping List"
    And I should see 'Shopping list "Shopping list" was updated successfully' flash message

  Scenario: "Product View Page Templates 1A" > Check simple product page with selected: Default template
    Given I operate as the Admin
    And go to System / Configuration
    And I follow "Commerce/Design/Theme" on configuration sidebar
    And fill "Page Templates Form" with:
      | Use Default  | true             |
      | Product Page | Default template |
    And save form
    Then I should see "Configuration saved" flash message
    Then I should see "Default template"
    And I follow "Commerce/Product/Configurable Products" on configuration sidebar
    And uncheck "Use default" for "Product Views" field
    And I fill in "Product Views" with "No Matrix Form"
    And I save form
    Then I should see "Configuration saved" flash message

    And I operate as the Buyer
    When I open product with sku "gtsh_l" on the store frontend
    Then I should see "Green shirt L"
    Then I should see "Item #: gtsh_l"
    Then I should see the following prices on "Default Page":
      | Item | $10.00  |
      | Set  | $445.50 |
    Then I should see "Default Page" with "Remark group" containing data:
      | Remark | Test text for Green simple product |
    Then I should see "Default Page" with "Color group" containing data:
      | Color | Green |
    Then I should see "Default Page" with "Size group" containing data:
      | Size | L |

  Scenario: "Product View Page Templates 1B" > Check configurable product page with selected: Default template
    Given I open product with sku "shirt_main" on the store frontend
    Then I should see "Shirt_1"
    Then I should see "Item #: shirt_main"
    And I should see the following options for "Color" select:
      | Green |
      | Red   |
    And I should see the following options for "Size" select:
      | L |
      | M |
    Then I should see "Default Page" with "Remark group" containing data:
      | Remark | Test text for configurable product |

  Scenario: "Product View Page Templates 2A" > Check simple product page with selected: Short page template
    Given I operate as the Admin
    And go to System / Configuration
    And I follow "Commerce/Design/Theme" on configuration sidebar
    And fill "Page Templates form" with:
      | Use Default  | false      |
      | Product Page | Short page |
    And save form
    Then I should see "Configuration saved" flash message
    Then I should see "Short page"

    And I operate as the Buyer
    When I open product with sku "gtsh_l" on the store frontend
    Then I should see "Green shirt L"
    Then I should see "Item #: gtsh_l"
    Then I should see the following prices on "Short Page":
      | Price | $10.00 / item |
    Then I should not see "Remark Group"
    Then I should not see "Color Group"
    Then I should not see "Size Group"

  Scenario: "Product View Page Templates 2B" > Check configurable product page with selected: Short page template
    Given I open product with sku "shirt_main" on the store frontend
    Then I should see "Shirt_1"
    Then I should see "Item #: shirt_main"
    And I should see the following options for "Color" select:
      | Green |
      | Red   |
    And I should see the following options for "Size" select:
      | L |
      | M |
    Then I should not see "Remark Group"

  Scenario: "Product View Page Templates 3A" > Check simple product page with selected: Two columns page template
    Given I operate as the Admin
    And go to System / Configuration
    And I follow "Commerce/Design/Theme" on configuration sidebar
    And fill "Page Templates form" with:
      | Use Default  | false            |
      | Product Page | Two columns page |
    And save form
    Then I should see "Configuration saved" flash message
    Then I should see "Two columns page"

    And I operate as the Buyer
    When I open product with sku "gtsh_l" on the store frontend
    Then I should see "Green shirt L"
    Then I should see "Item #: gtsh_l"
    Then I should see the following prices on "Two Columns Page":
      | Listed Price: | [$10.00 / item, $445.50 / set] |
      | Your Price:   | $10.00 / item                  |
    Then I should see "Two Columns Page" with "Remark group" containing data:
      | Remark | Test text for Green simple product |
    Then I should see "Two Columns Page" with "Color group" containing data:
      | Color | Green |
    Then I should see "Two Columns Page" with "Size group" containing data:
      | Size | L |

  Scenario: "Product View Page Templates 3B" > Check configurable product page with selected: Two columns page template
    Given I open product with sku "shirt_main" on the store frontend
    When I select "Green" from "Color"
    When I select "L" from "Size"
    Then I should see "Shirt_1"
    Then I should see "Item #: shirt_main"
    Then I should see the following prices on "Two Columns Page":
      | Listed Price: | [$10.00 / item, $445.50 / set] |
      | Your Price:   | $10.00 / item                  |
    Then I should see "Two Columns Page" with "Remark group" containing data:
      | Remark | Test text for configurable product |

  Scenario: "Product View Page Templates 4A" > Check simple product page with selected: List page template
    Given I operate as the Admin
    And go to System / Configuration
    And I follow "Commerce/Design/Theme" on configuration sidebar
    And fill "Page Templates form" with:
      | Use Default  | false     |
      | Product Page | List page |
    And save form
    Then I should see "Configuration saved" flash message
    Then I should see "List page"

    And I operate as the Buyer
    When I open product with sku "gtsh_l" on the store frontend
    Then I should see "Green shirt L"
    Then I should see "Item #: gtsh_l"
    Then I should see the following prices on "List Page":
      | Price | $10.00 / item |
    Then I should see "List Page" with "Remark group" containing data:
      | Remark | Test text for Green simple product |
    Then I should see "List Page" with "Color group" containing data:
      | Color | Green |
    Then I should see "List Page" with "Size group" containing data:
      | Size | L |

  Scenario: "Product View Page Templates 4B" > Check configurable product page with selected: List page template
    Given I open product with sku "shirt_main" on the store frontend
    When I select "Green" from "Color"
    When I select "L" from "Size"
    Then I should see "Shirt_1"
    Then I should see "Item #: shirt_main"
    Then I should see the following prices on "List Page":
      | Price | $10.00 / item |
    Then I should see "List Page" with "Remark group" containing data:
      | Remark | Test text for configurable product |

  # TODO: Should be uncommented after BB-9990 is done
#  Scenario: "Product View Page Templates 5A" > Check that the label is hiding if the condition _name
#    Given I login as administrator
#    And go to Products/ Product Attributes
#    And I click on Remark in grid
#    And fill form with:
#      | Label | _Remark |
#    And I save and close form
#    And go to System / Configuration
#    And I follow "Commerce/Design/Theme" on configuration sidebar
#    And fill "Page Templates form" with:
#      | Use Default  | false     |
#      | Product Page | List page |
#    And save form
#    Then I should see "Configuration saved" flash message
#    Then I should see "List page"
#    And I click Logout in user menu
#    And I signed in as AmandaRCole@example.org on the store frontend
#    When I open product with sku "gtsh_l" on the store frontend
#    Then I should not see "Remark"
#    And I should see "Test text for Green simple product"
