# todo_app_team_1

SELECT user, host, plugin FROM mysql.user WHERE user = 'root';oALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'yourpassword';FLUSH PRIVILEGES;
USE todo_app;
REATE TABLE tasks (    id INT AUTO_INCREMENT PRIMARY KEY,    description VARCHAR(100) NOT NULL,    status VARCHAR(20) DEFAULT 'pendente');
