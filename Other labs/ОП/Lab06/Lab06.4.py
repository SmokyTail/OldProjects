f = open("input.txt", "r")
for line in f.readlines():
    print(line)
f.close()



f1 = open("input1.txt", "r")
line = f1.readlines()
print(line[0])
f1.close()


if __name__ == "__main__":
    f2 = open("output.txt", "w")
    zoo = ['lion', "elephant", 'monkey']
    n = 0
    for i in zoo:
        f2.writelines(zoo[n] + " ")
        n += 1
    f2.close()