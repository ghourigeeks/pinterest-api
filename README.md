Success : on the first request the code run successfully 

![image](https://user-images.githubusercontent.com/97091625/176037736-7598ae07-5ee4-4918-b8f8-fc69059234fd.png)

______________________________________________________________________________________________________________

Error : but when i give the request on the second time so error come in :

![image](https://user-images.githubusercontent.com/97091625/176036775-2b758e6e-c7fc-4729-9dfe-4b5f4cc82f82.png)

______________________________________________________________________________________________________________


Url : https://www.pinterest.com/oauth/?client_id=1478633&redirect_uri=https://intern.geeksroot.net/&response_type=code&scope=boards:read,pins:read,boards:write,pins:writehttps://intern.geeksroot.net/

________________________________________________________________________________________________________________________________________________________________


Reason : on every request from pinterest : 

![image](https://user-images.githubusercontent.com/97091625/176039263-f2997bd9-0731-45ee-8ccb-6ebbffad0216.png)

______________________________________________________________________________________________________________


the code was changed in the url or in the code file we give static code thats i copy from the pinterest url 

but then i send another request so code was changed thats why error comes in 

![image](https://user-images.githubusercontent.com/97091625/176039443-76fa8828-0627-445d-8337-36e828036f24.png)


_______________________________________________________________________________________________________________


solution : store code in seesion so when we hit request so it dont display the error msg









