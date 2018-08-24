# OroHangoutsCallBundle
Integration that will allow to make calls using Google Hangouts

By default into "Start a Hangout" button is added information to start OroHangoutApp within Google Hangouts call.
(see more information about [Hangouts button configuration](https://developers.google.com/+/hangouts/button))

It is possible to setup other application (or even several applications) to start within Google Hangouts call over configuration file:
```yml
oro_hangouts_call:
    initial_apps:
        - app_id: 1088XXXXX90       # application id code
          app_type: 'LOCAL_APP'
          app_name: 'MyApplication'
```

Or turn off starting any application at all
```yml
oro_hangouts_call:
    initial_apps: []
```
