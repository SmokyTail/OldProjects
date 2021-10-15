squares = [1, 4, 9, 16, 25]
print(squares)
print(squares[1:4])

animals = ['elephant', 'lion', 'tiger', "giraffe"]
print(animals)
animals += "monkey", 'dog'
print(animals)
animals.append("dino")
print(animals)
animals[6] = "dinosaur"
print(animals)

animals = ['elephant', 'lion', 'tiger', "giraffe", "monkey", 'dog']   # Создание нового списка
print(animals)

animals[1:3] = ['cat']
print(animals)

animals[1:3] = []
print(animals)

animals[:] = []
print(animals)