phone_book = {"John": 123, "Jane": 234, "Jerard": 345}
print(phone_book)

phone_book["Jill"] = 345
print(phone_book)

del phone_book['John']
print(phone_book)

print(phone_book["Jill"])

phone_book = {"John": 123, "Jane": 234, "Jerard": 345}
print(phone_book)

phone_book["Jill"] = 456
print(phone_book)

print(phone_book.keys())
print(phone_book.values())

grocery_list = ["fish", "tomato", 'apples']
print("tomato" in grocery_list)

grocery_dict = {"fish": 1, "tomato": 6, 'apples': 3}
print("fish" + "potato" in grocery_dict)