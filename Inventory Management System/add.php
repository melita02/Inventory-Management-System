 <script>
        function populate(s1,s2,s3){
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    var s3 = document.getElementById(s3)

    for (i = 0; i < I_name.length; i++){
    //To check if a non-numerical value is entered
    if (s1=I_name[i]) 
    {
        if (s2=Color[i])
        {
            if (s3=Size[i]){
                $msg="Order is been place for ".$I_name." ";
                echo"<script type='text/javascript'>alert('$message')";
            }
        }
    }
}
   </script>