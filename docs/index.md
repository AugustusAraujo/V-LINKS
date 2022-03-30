<h1 align="center">
<img src="https://github.com/AugustusAraujo/V-LINKS/blob/api/logo_vlinks.png?raw=true" width="100"/>

<br>
V-LINKS
<br>
Documentation
</h1>

---

<h2>Routes</h2>

- ### Login

  `METHOD : POST`<br>
  `ENDPOINT: /login`

  **Payload**

  ```json
  {
      "username": <USERNAME>,
      "password": <PASSWORD>
  }
  ```

  **Responses**

  Sucess : 200

  ```json
  {
      "token": <USER-TOKEN>
  }
  ```

  Invalid username or password : 400

  ```json
  {
    "status": "Invalid user."
  }
  ```

  Empty Fields: 400

  ```json
  {
    "username": ["The username field is required."],
    "password": ["The password field is required."]
  }
  ```

- ## Link

    ``METHOD : GET`` <br>
    ``ENDPOINT: /login/<LINK>``

    **Payload**
    Passed in uri
    ``/login/<LINK>``

    **Responses**

    Sucess : 200

    ```json
    {
        "user_id": <USER-ID>,
        "shortened": <SHORTENED>,
        "link": <UNSHORTENED-LINK>,
        "created_at": <TIME>,
        "updated_at": <TIME>
    }
    ```

    Invalid Param : 400

    ```json
    {
        "status": "Invalid Param."
    }
    ```

    Empty Field : 400

    ```json
    {
        "status": "Empty Field."
    }
    ```
