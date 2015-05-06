#include<iostream.h>
#include<conio.h>
#include<fstream.h>
#include<string.h>
#include<stdlib.h>
#include<stdio.h>
void main()
{
char s[10],c;
clrscr();
ifstream in;
in.open("anu.txt");
cout<<" string:";
while(in.eof()==0)
{
in.get(c);
cout<<c;
}
getch();
}

