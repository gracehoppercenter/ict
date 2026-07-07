#include <stdio.h>
#define NUMNUMS 100
#define MAXNUM 255

main(argc, argv)
int argc;
char* argv[];
{
    FILE *f;
    int nums[NUMNUMS];
    int count, i, j, num;
    int exists;
    int rand_seed;
    
    if (argc > 1)
        rand_seed = atoi(argv[1]);
    else
        rand_seed = 1;
    
    f = fopen("NUMS.DAT", "w");
    if (f == NULL) {
        printf("Error opening file!\n");
        return 1;
    }
    
    count = 0;
    while (count < NUMNUMS) {
        /* Simple linear congruential generator for 16-bit systems */
        rand_seed = (rand_seed * 25173 + 13849) & 0x7FFF;
        num = rand_seed % (MAXNUM + 1);
        
        exists = 0;
        for (i = 0; i < count; i++) {
            if (nums[i] == num) {
                exists = 1;
                break;
            }
        }
        
        if (!exists) {
            nums[count] = num;
            count++;
        }
    }
    
    for (i = 0; i < NUMNUMS; i++) {
        fprintf(f, "%d", nums[i]);
        if (i < NUMNUMS - 1) {
            if ((i + 1) % 10 == 0)
                fprintf(f, "\n");
            else
                fprintf(f, " ");
        }
    }
    
    fclose(f);
    return 0;
}
