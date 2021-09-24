#start SQL Server, start the script to create/setup the DB
 #wait for the SQL Server to come up
sleep 10s

echo "running set up script"
#run the setup script to create the DB and the schema in the DB
/opt/mssql-tools/bin/sqlcmd -S localhost -U sa -P P@ssw0rd -d master -i db-init.sql