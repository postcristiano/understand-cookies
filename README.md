# understand-cookies

### Cookies
- Identify user
- Storage data from guest/user site
- Types
	- Session cookies - while user browsing
	- Persistent cookies - keep after exit browser
	- 3rd parties cookies - tracking

#### Properties
- Name
- Value
- Domain
- Path
- Expires/ Max-Age
- Size
- HttpOnly (True or False)
- Secure (True or False)
- SameSite - eg. `Strict`  `Lax`

> Browsers Private tabs bypass cookie persistence.


```shell
mkdir cookies_test
cd cookies_test
php -S 0.0.0.0:9000 -t .
```

