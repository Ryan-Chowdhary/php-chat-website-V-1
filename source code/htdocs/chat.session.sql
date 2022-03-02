-- @block
CREATE TABLE userchat(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    chat_text TEXT NOT NULL
);

--@block
INSERT INTO userchat(username, chat_text) VALUES('admin', 'Hello, welcome to the chat!');