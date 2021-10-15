def PrintRectangle(a, b, file):
    FO = open(file, "w")
    abyssA = a - 2
    abyssB = b - 2
    FO.writelines('\n' + "*" * a)
    for i in range(abyssB):
        FO.writelines('\n' + "*" + " " * abyssA + "*")
    FO.writelines('\n' + "*" * a)
    FO.close()

def PrintSquare(a, file):
    FO = open(file, "w")
    abyssA = a - 2
    FO.writelines('\n' + "*" * a)
    for i in range(abyssA):
        FO.writelines('\n' + "*" + " " * abyssA + "*")
    FO.writelines('\n' + "*" * a)
    FO.close()

FI = open("input65.txt", "r")

line = FI.readlines()
a = int(line[0])
b = int(line[1])
file = line[2]
if a == b:
    PrintSquare(a, file)
else:
    PrintRectangle(a, b, file)