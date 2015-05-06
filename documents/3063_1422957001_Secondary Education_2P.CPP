#include<iostream.h>
#include<string.h>
#include<conio.h>
#include<fstream.h>
#include<stdio.h>
void main()
{
char ch[30];
int n,i=0;
clrscr();
ifstream out("tex.txt");
cout<<"enter n";
cin>>n;
cout<<"enter string to the file";
while(i<=3)
{
cin>>ch[i];
}
for(i=3;ch!="\n";i--)
{
cout<<strrev((ch+i));
 }
cout<<"success!!";
out.close();
getch();
}

