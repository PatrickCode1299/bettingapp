CREATE TABLE usersgameholder(
 id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  gamecat text, 
  housemate text, 
  odds text, 
  gamerefid text, 
  gameowner text, 
  gamedate datetime,
  unique_id text,
  gameamount text,
  winningamount text,
  oddamount text,
  winningstatus varchar(2),
  payment_request text,
  payment_status text
  );