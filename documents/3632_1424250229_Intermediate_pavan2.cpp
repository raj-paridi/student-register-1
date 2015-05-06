#include<iostream>
#include<fstream>
using namespace std;
int main()
{
	ifstream infile;
	char ch;
	infile.open("king");
	cout<<"contents in the file are\n"
	while(!infile.eof())
	{
		infile.get(ch);
		cout<<ch;
	}
	return 0;
}
