monty_python = "Monty Python"
print(monty_python[1:5])

monty = monty_python[:5]
print(monty)

python = monty_python[6:]
print(python)

ice_cream = "ice cream"
print("cream" in ice_cream)

print("ice" in ice_cream)
print("Ice" in ice_cream)
print("ice" in ice_cream)

print(len(python))

phrase = """
It is a really long string
triple-quoted strings are used
to define multi-line strings
"""
l = len(phrase) / 2
first = phrase[:int(l)]
print(str(first))