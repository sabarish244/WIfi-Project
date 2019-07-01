
import java.util.*;
import java.io.*;
import java.lang.*;
import java.util.Date;

import java.text.*;

import java.util.Calendar;
import java.util.Date;
class datedemo
{

public static void main(String a[]) throws Exception
{


DateFormat dateFormat = new SimpleDateFormat("dd-MM-yyyy HH:mm:ss");
	Date date = new Date();
	System.out.println(dateFormat.format(date)); 

}
}