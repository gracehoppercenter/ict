import random

NUMNUMS = 100
MAXNUM = 255

f = open('NUMS.DAT', 'w')
count = 0
nums = []
while count < NUMNUMS:
    num = random.randint(0, MAXNUM)
    if num not in nums:
        nums.append(num)
        count += 1

for i in range(len(nums)):
    f.write(f"{nums[i]}{' ' if (not i or i % 10) else '\n'}")
f.close()
