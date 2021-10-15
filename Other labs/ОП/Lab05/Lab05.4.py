a = float(input("Input A: "))
b = float(input("Input B: "))
c = float(input("Input C: "))

if a + b <= c or b + c <= a or c + a <= b:
    print("Sad")
elif a == b and b == c:
    print("A=B=C")
elif a == b or b == c or a == c:
    print("a=b<>c")
else:
    print("A<>B<>C")



import math

A = float(input("Input A: "))
B = float(input("Input B: "))
C = float(input("Input C: "))


print('\n' + "Equation:" + '\n' + str(int(A)) + "X^2 + " + str(int(B)) + "X + " + str(int(C)) + ' = 0')

if A == 0:
    print("A = 0 = SAD")
else:
    D = B**2 - 4*A*C
    if D == 0:
        print("D = 0, x = 0")
    elif D < 0:
        print("D < 0, x = SAD")
    else:
        XOne = (-B + math.sqrt(D))/2*A
        XTwo = (-B - math.sqrt(D))/2*A
        round(XOne, 5)
        round(XTwo, 5)
        if XOne > XTwo:
            print('\n' + "Answer:" + '\n' + "X1 = " + str(round(XOne, 5)) + '\n' + "X2 = " + str(round(XTwo, 5)))
        else:
            print('\n' + "Answer:" + '\n' + "X1 = " + str(round(XTwo, 5)) + '\n' + "X2 = " + str(round(XOne, 5)))



import datetime

'''HotpA = int(input("Departure time" + '\n' + "Input hours: "))
MotpA = int(input("Input minuts: "))
HotpB = int(input('\n' + "Travel time" + '\n' + "Input hours: "))
MotpB = int(input("Input minuts: "))
DA = datetime.timedelta(hours=HotpA, minutes=MotpA)
DB = datetime.timedelta(hours=HotpB, minutes=MotpB)
Arrival = DA + DB
print('\n' + "Answer" + '\n' + str(Arrival))'''



WoodenMoney = int(input("Input your money: "))
Rub = WoodenMoney // 100
Pen = WoodenMoney % 100
if Rub > 0:
    if Rub > 9 and Rub < 20:
        print(str(Rub) + " РУБЛЕЙ")
    elif Rub % 10 == 1:
        print(str(Rub) + " РУБЛЬ")
    elif Rub % 10 > 1 and Rub % 10 < 5:
        print(str(Rub) + " РУБЛЯ")
    elif Rub % 10 > 4 or Pen % 10 == 0:
        print(str(Rub) + " РУБЛЕЙ")
if Pen > 0:
    if Pen > 9 and Pen < 20:
        print(str(Pen) + " КОПЕЕК")
    elif Pen % 10 == 1:
        print(str(Pen) + " КОПЕЙКА")
    elif Pen % 10 > 1 and Pen % 10 < 5:
        print(str(Pen) + " КОПЕЙКИ")
    elif Pen % 10 > 4 or Pen % 10 == 0:
        print(str(Pen) + " КОПЕЕК")