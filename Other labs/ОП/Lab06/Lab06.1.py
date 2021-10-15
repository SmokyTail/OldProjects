for i in range(5):
    print(i)
print()

primes = [2, 3, 5, 7]
for i in range(len(primes)):
    print(primes[i])
print()

for prime in primes:
    print(prime)
print()

hello_world = "Hello, World!"
for ch in hello_world:
    print(ch)
print()

length = 0
for p in hello_world:
    length += 1
print(length)
print(len(hello_world) == length)