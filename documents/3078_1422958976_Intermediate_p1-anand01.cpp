#include <iostream>
#include <fstream>
using namespace std;

int main () {
	char name[20];
  ofstream f1 ("anand.txt");
  f1.open("anand.txt", ios::in);
  while(!f1.eof())
  {
  	cout<<"Enter name";
    f1 << gets(name);
    f1.close();
  }
  return 0;
}
