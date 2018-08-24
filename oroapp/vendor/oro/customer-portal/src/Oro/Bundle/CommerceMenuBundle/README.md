CommerceMenuBundle
==================

The `CommerceMenuBundle` add ability to define frontend menus.

## General

Example usage:

```
# DemoBundle\Resources\config\oro\navigation.yml

navigation:
    menu_config:
        items:
            first_menu_item:
                label: 'First Menu Item'
                route: '#'
                extras:
                    position: 10
            second_menu_item:
                label: 'Second Menu Item'
                route: '#'
                extras:
                    position: 20

        tree:
            top_nav:
                scope_type: menu_frontend_visibility                    # identifier scope type for menus using in frontend
                children:
                    first_menu_item ~
                    second_menu_item ~
```

Please see [documentation](https://github.com/orocrm/platform/tree/master/src/Oro/Bundle/NavigationBundle/README.md) for more details.

## Sections:

* [Responsive Menu Flags](https://github.com/oroinc/customer-portal/blob/master/src/Oro/Bundle/CommerceMenuBundle/Resources/doc/responsive-menu-flags.md)
