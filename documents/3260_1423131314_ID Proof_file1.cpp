#include<iostream>
#incldue<>
#include<fstream>

int main()
{
	ofstream outfile;
	char a[20];ch;
	outfile.open("newfile.txt");
	cout<<"Enter your string!";
	cin>>a;
	outfile<<a;
	outfile.close();
	return 0;
}
