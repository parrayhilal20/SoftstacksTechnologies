# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""


num1 = 5
name = "Hello, This is python"
if 3 > 2:
 print("Hey this Python")
          #print("Hey this is again Python")
 print(name + "3")
 
val1, val2, val3 = 'Orange', "Banana", 'Cherry'
print(val1)
print(val2)
print(val3)

first = second = third = "Violet"
print(first)
print(second)
print(third)

four = "Python is"
five = "    great"
seven = four + five
print(seven)

def myfunc():
    global four
    four = "This is Py"
    print(four)
myfunc()
print(four)
variable = bool(7)
print(type(variable))

#print(random.randrange(1,10))

x = str("Hello")
y = str(2)
z = str(3.0)
print(x)
print(y)
print(z)

b = "    Hello, Python   "
print(b[2:6])
print(b[-5:-2])
print(len(b))

print(b.strip())
print(b.lower())
print(b.upper())

print(b.replace("H","G"))
print(b.split(','))

st = "This is python and I will master it!"
findd = "iz" not in st
print(findd)
print("I am learning Python and is  easy than other languages!")

age = 22
txt = "My name is Python and I am {} old"
print(txt.format(age))

quantity = 3
itemno = 453
price = 20.30
order = "I want {} pieces of {} in cost of {} today"
print(order.format(quantity,itemno,price))

strings = "capitalize it"
print(strings.capitalize())
print(strings.encode())
print(strings.find('ize'))
print(strings.index('a'))
print(strings.translate('this is'))
print(10 > 2)

a = 0
b = 205
if a > b :
    print("a is greater")
else:
    print("b is greater")
st = ''
print(bool(a))
print(bool(st)) 
print(bool([]))
def myFunction():
    return False
if myFunction():
    print("Yes!")
else:
    print("No!")
x = 200
print(isinstance(x, float))

thislist = ['apple', 'banana', 'cherry']
thislist[1] = "apple2"
print(thislist)
for x in thislist:
    print(x)
if "apple3" in thislist:
    print("Hey! apple is present in thislist!")
else:
    print("Hey! apple is not present")
    print(len(thislist))
    thislist.append("orange")
    print(thislist)
    thislist.insert(1,"orange2")
    print(thislist)
    thislist.remove("orange2")
    print(thislist)
    thislist.pop()
    print(thislist)
    del thislist[1]
    print(thislist)
    #thislist.clear()
    print(thislist)
    mylist = thislist.copy()
    print(mylist)
    list3 = thislist + mylist
    print(list3)

thislist = list(("manoge", "aam", "chr"))
print(thislist)

thisdict = {"brand": "Ford", 
            "model": "Mustang",
            "year":1964}
thisdict['year'] = 2018
print(thisdict)

for x,y in thisdict.items():
    print(x,y)

thisdict['color'] = 'red'
print(thisdict)

myfamily = {
            "child1" : { 'name' : "Emil", "year" : 2004},
            "child2" : { "name" : "Tobias", "year": 2006},
            "child3" : {"name" : "Linus", "year" : 2011}
          }

for x,y in myfamily.items():
    print(x,y)

a = 23
b = 23
if a > b:
    print("a is greater than b")
elif a == b:
    print("values are equal")
else:
    print("b is greater than a")
    
print("a is greaterr") if a > b else print("b is greaterr") 
print("a") if a > b else print("equal") if a == b else print("b") 


var1 = 200
var2 = 400
var3 = 245

if var1 > var2 and var3 > var2:
    print("All conditions are true")
    


if var2 > var1 or var3 > var2:
    print("single condition is true")

if var2> var1:
    if var3> var1:
        print("greater yes!")

if var2 > var1:
    pass
else:
    print('pass')

i = 1
while i < 6:
    print(i)
    i += 1

i = 1
while i < 8:
    print(i)
    i += 1
else:
    print("condition got false")
    
fruits = ["apple", "banana", "cherry"]
for i in fruits:
    print(i)

for i in "banana":
    print(i)


for i in range(10):
    print(i)
print('-----')
for x in range(4,6):
    print(x)
print('-----')

for x in range(1,20,2):
    print(x)
else:
    print("finally")
    
colors = ['red', 'green', 'blue']
fruits = ['apple', 'banana', 'cherry']

for x in colors:
    for y in fruits:
        print(x, y)
        
for i in [0, 1, 2]:
    pass

def my_function():
    print("Hello from function")
my_function()

def my_function2(fname,lstname):
    print(fname +lstname+" is good")
my_function2("Zaamin ", "Dar")
my_function2("Aman ", "Parray")
my_function2("Umair ", "Parray")

def my_function3(*kids):
    print("The kids are : " + kids[2] )
my_function3("Kid1", "Kid2", "Kid3")


def my_function4(child3, child1, child2):
    print("The yougest child is : "+ child1)
my_function4(child1 = "Umair", child2 = "Sayan", child3 = "Sahaba")

def my_function5(country = "Norway"):
    print("I am from : "+ country)
my_function5("Pakistan")
my_function5("Afghanistan")
my_function5()


class MyClass:
    x = 5
    
obj = MyClass()
print(obj.x)

class Person:
    def __init__(self,nam,ag):
        self.na = nam
        self.a = ag
    def my_func(self):
        print("Hello my name is : " + self.na)
obj = Person("John", 36)
print(obj.na)
print(obj.a)
obj.my_func()


class Person2:
    def __init__(myobj, name, age):
        myobj.n = name
        myobj.a = age
    def myfunction11(abc):
        message = "This is your name : {} and age is : {}"
        print(message.format(abc.n,abc.a))

obj2 = Person2("Zaamin",70)
#del obj2.a
print(obj2.n)
print(obj2.a)
obj2.myfunction11()

class BaseClass:
    def my_function(sl):
        print(sl.fn,sl.ln)
    def my_function11(slf):
        print("This is my function")
class ChildClass(BaseClass):
    def __init__(self,firstn,lastn):
        self.fn = firstn
        self.ln = lastn
        super().my_function()
        #super().my_function11()
#obj3 = BaseClass()
obj4 = ChildClass("FirstNa","LastNa")
obj4.my_function()
obj4.my_function11()


mytuple = ("apple", "banana", "cherry")
myit = iter(mytuple)

print(next(myit))
print(next(myit))
print(next(myit))


def myfunct():
    x = 200
    def myinnerfunc():
        print(x)
    myinnerfunc()

myfunct()

x = 3000
def fun():
    global x
    x = 20000
    print(x)

fun()
print(x)

import mymodule  as md

md.greetings("Syan")

name = md.person['name']
age = md.person['age']
country = md.person['country']
print(name,age,country)


import platform

x = platform.system()

#y = dir(platform)
y = platform.uname()
y = dir(md)
print(y)


from mymodule import person

x = person['name']
print(x)

import datetime

x = datetime.datetime.now()
print(x.day)
print(x.strftime('%A'))


x = datetime.datetime(2014, 5, 17)
print(x.strftime('%Y'))


import json

x = '{ "name" : "Shab", "age" : 44, "country": "York"}'

y = json.loads(x)
print(y['age'])

x = { "name" : "Shab", "age" : 44, "country": "York"}

y = json.dumps(x)
print(y)

import re

txt = "The rain in Spain"

x = re.findall("hee", txt)

print(x)



txt = "The rain in Spaion"

x = re.search("\s", txt)

print("The first space is located in : ", x.start())

txt = "The rain is Spain"

x = re.split("is", txt, 1)
print(x)

txt = "The rain is in spain"

x = re.sub("\s", "Hey!", txt, 1)

print(x)
try:
    print(abc)
except NameError:
    print("An exception occurred due to abc not!")
except:
    print("Something else is tree!")


try:
    print("Hello")
except:
    print("Something went wrong")
else:
    print("Nothing went wrong")
    
try:
    print(abc)
except:
    print("Exeception occured")
finally:
    print("This is finally block")
#f = open("demofile.txt")
try:
    f = open("demofile.txt")
    f.write("Lorum Ipsum"
            )
except:
    print("Something went wrong when writing to the file")
finally:
    f.close()
    
    
x = -1

if x < 0:
    pass
    #raise Exception("Sorry, no numbers below zero!")

x = "Hello"
if not type(x) is int:
    pass
    #raise TypeError("Only integers are allowed!")
    
username = input("Enter username : ")
print("Username is: "+ username)


price = 44
txt = "The price is {:.2f} dollars"
print(txt.format(price))


quantity = 3
itemno = 454
price = 34
myorder = "I want {1} pieces of item number {0} for {2:.2f} dollars"

print(myorder.format(quantity,itemno,price))


myorder = "I have {carname}, {carname} is a {model}"

print(myorder.format(carname = "Ford", model = "2020"))

f = open("demofile.txt", "r")

print(f.readline())
f.close()

f = open("demofile.txt", "r")
for x in f:
    #print(x)
    pass
    
f = open("demofile.txt", "w")
f.write("Oops! I have deleted the content!")
f.close()

f = open("demofile.txt", "r")
print(f.read())
f.close()


f = open("demofile.txt","a")
f.write("Hey! I have appended some text!")
f.close()

f = open("demofile.txt","r")
print(f.read())

import numpy as np
arr = np.array([[1,2,3,4,5],[22,66,44]])
arr = np.array([[[1,2,3,4,5],[22,44,21,66,44]],[[2,30,40,54,50],[54,73,27,21,23]]])
#arr = np.array((1,2,3,4,5))
#arr = np.array(22) 0,4,2,
a = np.array(4)
b = np.array([12,20,3040,20])
c = np.array([[1,2,3],[4,5,6]])
d = np.array([[[11,112,13,14],[3,2,2,10]]])
print(a.ndim)
print(b.ndim)
print(c.ndim)
print(d.ndim)
#arr = np.array([1,2,3],ndmin = 5)
arr = np.array([1,2,3,4,5])
print(arr[4] + arr[1])
arr = np.array ([[2,3,2],[2,44,4]])
print("2nd element on 2nd dim: ",arr[1,1])
arr = np.array([1,2,3,4,5,6,7,8,9])
print(arr[4:])
print(arr[:4])
print(arr[-5:-2])
print(arr[1:7:2])
print(arr[::3])
arr = np.array([[1,3,4,2,5],[1,3,4,2,0]])
print(arr[1,1:5])
print(arr.dtype)
#print('number of dimensions : ', arr.ndim)
arr =np.array(['this','is','array'],dtype='S')
print(arr.dtype)
arr = np.array([1.2,3.5,2.3])
newarr = arr.astype('i')
newarr = arr.astype(bool)
print(newarr)
print(newarr.dtype)
print(np.__version__)
print(type(arr))
arr = np.array([1,2,3,4])
x = arr.copy()
y = arr.view()
print('------')
print(x.base)
print(y.base)
print('-------')
arr[2] = 62
print(arr)
print(x)

arr = np.array([2,3,4,58])
x = arr.view()
arr[0] = 11
print(arr)
print(x)
x[0] = 99
print(arr)
print(x)


arr = np.array([[1,2,3,4],[5,6,7,8]])
print(arr.shape)

arr = np.array([1,2,32,4,5,6,7,8,9,10,11,12])

newarr = arr.reshape(4,3)
print(newarr)

arr = np.array([[1,2,3],[2,3,4]])

for x in arr:
   for y in x:
     print(y)
     
     
     
arr1 = np.array([1,2,3])
arr2 = np.array([3,6,2])
arr = np.concatenate((arr1,arr2))
print(arr)

arr = np.array([1,2,3,4,5,6,4])
x = np.where(arr ==  4)
x = np.where(arr%2 ==  0)
print(x)
arr = np.array([1,3,5,7])
x = np.searchsorted(arr,10, side = 'right')
x = np.searchsorted(arr,[2,4,6])
print(x)