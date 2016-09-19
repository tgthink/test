#include <stdio.h>
/* 定义获取单词数量的函数 */
int getWordNumber(int n)
{   
    if(n == 1)
    {
        return 1;    //第一天只会1个单词
    }
    else{
        return getWordNumber(n-1)+n;       //到第天会的单词数量
    }
}
int main()
{
    int num = getWordNumber(10);     //获取会了的单词数量
    printf("小明第10天记了:%d个单词。\n", num);
    
    return 0;
}