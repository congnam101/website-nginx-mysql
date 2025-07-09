#!/bin/bash
TIMESTAMP=$(date +"%F-%H-%M")
BACKUP_DIR="/backup/$TIMESTAMP"
mkdir -p "$BACKUP_DIR"
docker exec mysql_db sh -c 'exec mysqldump -uroot -proot mydb' > "$BACKUP_DIR/db.sql"
