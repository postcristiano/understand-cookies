# understand-cookies

### Cookies
- Identify website user
- Store website guest/user data
- Types of cookies
	- Session cookies - while user browsing
	- Persistent cookies - keep after user exit browser
	- 3rd parties cookies - tracking

#### Cookies properties
- Name
- Value
- Domain
- Path
- Expires/ Max-Age
- Size
- HttpOnly (`true` or `false`)
- Secure (True or False)
- SameSite (`Strict` or `Lax`)

> Browsers Private tabs bypass cookie persistence.

##### Test cookies with PHP backend
```shell
mkdir cookies_test
cd cookies_test
wget https://raw.githubusercontent.com/postcristiano/understand-cookies/main/index.php
php -S 0.0.0.0:9000 -t .
```

