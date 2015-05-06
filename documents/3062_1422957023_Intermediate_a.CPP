#include<fstream>
#include<iostream>
#include<conio.h>
#include<string.h>
#include <process.h>

int main()
{
	char ch;
	fstream file;
	fstream file1;
	char name[20][20],filename[20],str[10],filename1[20];
	clrscr();
	for(;;)
	{
		cout<<"1:stdip 2 stdop\n2:file 2 stdop\n3:file2file\n4:quit";
		cin>>ch;
		switch(ch)
		{case '1':
			cout<<"enter 5 names\n";
			for(int i=1;i<=5;i++) cin>>name[i];
			for(i=1;i<=5;i++)
			{       strrev(name[i]);
				cout<<name[i]<<"\n";
			}
			break;
		case '2':
			cout<<"enter i/p  filename with names\n";
			cin>>filename;
			file.open(filename,ios::in);
			if (file.fail())
			{	cout << "cannot open file\n";
				getch(); exit(0);
			}
			while(1)
			{
				file>>str;
				if(file.fail()) break;
				cout<<strrev(str)<<"\n";
			}
			file.close();
			break;
		case '3':
			cout<<"enter i/p  filename\n";
			cin>>filename;
			cout<<"enter o/p  filename\n";
			cin>>filename1;
			file.open(filename,ios::in);
			file1.open(filename1,ios::out);
			if (file.fail() || file1.fail())
			{	cout << "cannot open file\n";
				getch(); exit(0);
			}
			while(1)
			{
				file>>str;
				if(file.fail()) break;
				cout<<str<<"\t";
				file1<<strrev(str)<<"\n";
			}
			file.close();
			file1.close();
			break;
		default:exit(0);
		}
	}
}
