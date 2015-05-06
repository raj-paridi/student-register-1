#include<conio.h>
#include<iostream.h>
#include<stdio.h>

class StackAdt
{
 public : int size;
 int a[20];
 StackAdt()
 {
  size=0;
 }
 void insert(int data);
};

class Stack : StackAdt
{
 int inf;
 public:
 void insert(int data)
 {
  a[size]=data;
  size++;
 }//insert

 void delete1()
 {
  if(size==0)
   cout<<"There are no elements";
  else
  {
   a[size-1]='/0';
   size--;
  }
 }//delete1
 void display()
 {
  inf=0;
  while(inf<=size)
  {
   cout<<"a[%d] ",inf;
   inf++;
  }
 }//display
};


void main()
{
 int ch,ele;
 Stack Blah;
 clrscr;
 ch=0;
 while(ch==0)
 {
  cout<<"\ninsert(1)\n";
  cout<<"delete(2)\n";
  cout<<"display(3)\n";
  cout<<"exit(0)\n";
  cout<<"choose one of the above: ";
  scanf("%d",&ch);
  switch(ch)
  {
   case 1: scanf("%d",&ele);
	  Blah.insert(ele);
	  break;
   case 2: Blah.delete1();
	  break;
   case 3: Blah.display();
	  break;
  }
 }
 getch();
}//main