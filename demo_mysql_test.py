import dns.resolver
import mysql.connector
mydb = mysql.connector.connect(
    host = "localhost",
    user = "root",
    password = "",
    database = "my_python_database"
)
mycursor = mydb.cursor()
#mycursor.execute("create database my_python_database")
#mycursor.execute("show databases")
#mycursor.execute("create table customers (name varchar(255),address varchar(200), contact varchar(30))")
#mycursor.execute("drop table customers")
#mycursor.execute("create table customers (id int not null primary key auto_increment, name varchar(100), address varchar(100), contact varchar(100))")
#mycursor.execute("show tables") 
#sql = ("insert into customers(name,address,contact) values(%s,%s,%s)")
#val = ("Developer77", "Bangaluru", "388383873733")
#mycursor.execute("insert into customers(name,address,contact) values('Developer abc','Kashmir','373737773737')")
#mycursor.execute(sql, val)
#mycursor.execute("select name,contact from customers")
#mycursor.execute("select * from customers where address like '%luru'")
sql = "select * from customers where address = %s"
adr = ("Karnataka",)
mycursor.execute(sql, adr)
myresult = mycursor.fetchall()

#myresult = mycursor.fetchone()
#mydb.commit()
#print("record inserted",mycursor.lastrowid)
for x in myresult:
    print(x)