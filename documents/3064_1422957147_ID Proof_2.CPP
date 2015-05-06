poojaude<iostream.h>
#include<conio.h>
int main()
{
   int i,a,b,n,c,temp;
   clrscr();
   a=0;
   b=1;
   cout<<"Enter the value of n : ";
   cin>>n;
   cout<<"The fibonacci series is 0 1 ";
   for(i=0;i<n-2;i++)
   {
      c=a+b;
      cout<<c<<" ";
      a=b;
      b=c;

   }
   getch();
   return 0;
}
