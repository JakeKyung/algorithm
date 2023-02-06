def factorial(n):
    f = 1
    for i in range(1, n+1):
        f = f * i
    return f

print(factorial(5))
'''
f = 1 * 1 = 1
f = 1 * 2 = 2
f = 2 * 3 = 6
f = 6 * 4 = 24
f = 24 * 5 = 120
output : 120
'''

def factorial_recursive(n):
    if n <= 1:
        return 1
    return n * factorial_recursive(n-1)

print(factorial_recursive(3))

# output : 3 * 2 * 1 = 6