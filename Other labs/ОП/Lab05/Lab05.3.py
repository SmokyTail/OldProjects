def hello_world():
    print("Hello, World!")
for i in range(3):
    hello_world()

a = input(str("Input a words: "))
b = input(str("Amount: "))
def i_want():
    print(str(a))
for i in range(int(b)):
    i_want()

def foo(x):
    print("x = " + str(x))
foo(5)

def square(y):
    print("y = " + str(y**2))
square(4)
square(8)
square(15)
square(23)
square(42)

def sum_two_numbers(a, b):
    return a + b
c = sum_two_numbers(3, 12)
print(c)

def fib(n):
    result = []
    a = 1
    b = 1
    while a < n:
        result.append(a)
        tmp_var = b
        a = b
        b = a + b
    return result

print(fib(10))