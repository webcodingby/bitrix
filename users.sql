SELECT users.id, users.name AS user_name, groups.name AS group_name
FROM users
JOIN groups ON users.group = groups.id
WHERE users.group = 1;
