127.0.0.1/task_xpeedstudio_turzo/		http://localhost/phpmyadmin/index.php?route=/database/sql&db=task_xpeedstudio_turzo
Your SQL query has been executed successfully.

desc buyers;



id	bigint(20)	NO	PRI	NULL	auto_increment	
amount	int(10)	NO		NULL		
buyer	varchar(255)	NO		NULL		
receipt_id	varchar(20)	NO		NULL		
items	varchar(255)	NO		NULL		
buyer_email	varchar(50)	NO		NULL		
buyer_ip	varchar(20)	NO		NULL		
note	text	NO		NULL		
city	varchar(20)	NO		NULL		
phone	varchar(20)	NO		NULL		
hash_key	varchar(255)	NO		NULL		
entry_at	datetime	NO		current_timestamp()		
entry_by	int(10)	NO		NULL		



127.0.0.1/task_xpeedstudio_turzo/		http://localhost/phpmyadmin/index.php?route=/database/sql&db=task_xpeedstudio_turzo
Your SQL query has been executed successfully.

desc users;



id	int(11)	NO	PRI	NULL	auto_increment	
name	varchar(255)	NO		NULL		
email	varchar(255)	NO		NULL		
password	varchar(255)	NO		NULL		
created_at	datetime	NO		current_timestamp()		
