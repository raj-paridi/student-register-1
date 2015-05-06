#include<iostream.h>
void sll::create()
{
	mode *temp,*new;
	int val,flag;
	char ans='y';
	flag=true;
	do
	{
		cout<<"\n enter the data";
		cin>>val;
		//allocate memory to new data
		new = new node;
		if(new=null)
		cout<<"unable to allocate memory \n";
		new -> data = value;
		new -> next=null;
		if (flag==true)//executed only for the first time
		{ 
			head=new;
			temp=head;
			flag=false;
		} 
		else
		{
			/temp last keeps track of most recently created node */
			temp -> next=new;
			temp=new;
		}
		cout<<"\n do you want to enter new elements? (y/n)";
		ans=getch();
	}
	while(ans=='y'||ans=='n');
	cout<<"\n the single linked list is created \n";
	getch();
	clrscr();
}
