define({ "api": [
  {
    "type": "post",
    "url": "/api/login",
    "title": "Grant Access Token",
    "group": "Authentication",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "email",
            "description": "<p>User Email</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "password",
            "description": "<p>User Password</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "token",
            "description": "<p>Access Token</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Successful Response:",
          "content": " HTTP/1.1 200 OK\n{\n   \"token\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvbW92ZWluYW5kb3V0LmFxdWlsYXRlY2hzLmNvbVwvYXBpXC9sb2dpbiIsImlhdCI6MTU5NTQ5OTgwNCwiZXhwIjoxNTk1NTAzNDA0LCJuYmYiOjE1OTU0OTk4MDQsImp0aSI6Ik1mcXFFWUtTWG9CaDdZTGMiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ipmix0eUpVneon54IdDDXjvpqQVjCuGsyBnnKUhc2ts\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/APIs/UserController.php",
    "groupTitle": "Authentication",
    "name": "PostApiLogin"
  },
  {
    "type": "post",
    "url": "/api/register",
    "title": "Register New User",
    "group": "Authentication",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "name",
            "description": "<p>User Name</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "email",
            "description": "<p>User Email</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "password",
            "description": "<p>Password</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "confirm_password",
            "description": "<p>Confirm Password</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "object",
            "optional": false,
            "field": "user",
            "description": "<p>User Details</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "token",
            "description": "<p>Access Token</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Successful Response:",
          "content": " HTTP/1.1 200 OK\n{\n \"user\": {\n \"name\": \"Binyameen\",\n  \"email\": \"yameenmalik79@gmail.com\",\n \"updated_at\": \"2020-07-23 11:34:27\",\n \"created_at\": \"2020-07-23 11:34:27\",\n \"id\": 2\n },\n \"token\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvbW92ZWluYW5kb3V0LmFxdWlsYXRlY2hzLmNvbVwvYXBpXC9yZWdpc3RlciIsImlhdCI6MTU5NTUwNDA2NywiZXhwIjoxNTk1NTA3NjY3LCJuYmYiOjE1OTU1MDQwNjcsImp0aSI6IkhrRXJkekJvSElWR29XeWMiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.VrYMos6e9BFkdAnxadGXcvGivLA1y_0usIpfMhfAwtE\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/APIs/UserController.php",
    "groupTitle": "Authentication",
    "name": "PostApiRegister"
  }
] });
