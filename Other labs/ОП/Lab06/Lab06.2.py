square = 1
while square <= 10:
    print(square)
    square += 1
print("Finished" + '\n')

square = 0
number = 1
while number <= 9:
    square = number ** 2
    print(square)
    number += 1
print()

count = 0
while True:
    print(count)
    count += 1
    if count >= 50:
        break
print()

zoo = ["lion", "tiger", "elephant"]
while True:
    animal = zoo.pop()
    print(animal)
    break
print()

for i in range(5):
    if i == 3:
        continue
    print(i)

for x in range(10):
    if (x % 2) == 0:
        continue
    print(x)