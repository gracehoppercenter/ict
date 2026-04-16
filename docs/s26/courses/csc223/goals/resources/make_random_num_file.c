#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#define NUMNUMS 100
#define MAXNUM 255

int main()
{
    FILE *f;
    int nums[NUMNUMS];
    int count, i, j, num;
    int exists;

    /* Seed the random number generator */
    srand(time(NULL));

    /* Open the output file */
    f = fopen("NUMS.DAT", "w");
    if (f == NULL) {
        printf("Error opening file!\n");
        return 1;
    }

    /* Generate unique random numbers */
    count = 0;
    while (count < NUMNUMS) {
        num = rand() % (MAXNUM + 1);  /* rand() % 256 gives 0-255 */
        
        /* Check if number already exists in the array */
        exists = 0;
        for (i = 0; i < count; i++) {
            if (nums[i] == num) {
                exists = 1;
                break;
            }
        }
        
        /* If number is unique, add it to the array */
        if (!exists) {
            nums[count] = num;
            count++;
        }
    }

    /* Write numbers to file with 10 numbers per line */
    for (i = 0; i < NUMNUMS; i++) {
        fprintf(f, "%d", nums[i]);
        
        /* Add space or newline */
        if (i == NUMNUMS - 1) {
            /* Last number - no space or newline needed */
        }
        else if ((i + 1) % 10 == 0) {
            fprintf(f, "\n");
        }
        else {
            fprintf(f, " ");
        }
    }
    
    fclose(f);
    return 0;
}
