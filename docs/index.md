<h1 align="center">
<img src="../logo_vlinks.png" width="100"/>

<br>
V-LINKS
<br>
Documentation
</h1>

---

<h2>Routes</h2>

- ### Login

    `METHOD : POST`
    `URI: /login`

    #### Payload

    ```json
        {
            "username": <USERNAME>,
            "password": <PASSWORD>
        }
    ```

    #### Responses

    ##### Sucess

    ```json
        {
            "token": <USER-TOKEN>
        }
    ```

    ##### Invalid username or password

    ```json
        {
            "status": "Invalid user."
        }
    ```

    ##### Empty Fields

    ```json
        {
            "username": ["The username field is required."],
            "password": ["The password field is required."]
        }
    ```
