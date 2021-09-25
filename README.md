# MahaYog-Internship-Task
## Built With

- HTML
- CSS
- PHP
- JS

### Create a database and execute the following SQL query to create the login table inside your MySQL database

```sql
CREATE TABLE `login` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
);
```
### change the default user and password in register.php and recover_psw.php for sending confirmation/password recover mail 
