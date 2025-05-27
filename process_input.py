import sys

x = float(sys.argv[1])
y = float(sys.argv[2])
z = float(sys.argv[3])

steps = []

steps.append(f"Step 1: x = {x}")
x += y
steps.append(f"Step 2: x + y = {x}")

x -= z
steps.append(f"Step 3: x - z = {x}")

x *= y
steps.append(f"Step 4: x * y = {x}")

if z != 0:
    x %= z
    steps.append(f"Step 5: x % z = {x}")

    x /= z
    steps.append(f"Step 6: x / z = {x}")
else:
    print("Cant divide by zero.")
    sys.exit(1)

final_result = x + y + z
steps.append(f"Final Result: x + y + z = {final_result:.2f}")

for step in steps:
    print(step)
    
