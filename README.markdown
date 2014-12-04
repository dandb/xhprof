XHProf UI
=========

Fork from [preinheimer/xhprof] (https://github.com/preinheimer/xhprof). Original library modified to support with SQL server backend.

This is a graphical front end designed to store and present the profiling information provided by the Facebook created XHProf profiling tool.


Key features include:

* [Base library] (https://github.com/preinheimer/xhprof) as mentioned above has been modified to support SQL server back-end. Need few more changes/tweaks to support all other major sql providers
* Listing 25, 50 most recent runs
* Display most expensive (cpu), longest running, or highest memory usage runs 
  for the day
* It introduces the concept of "Similar" URLs. Consider:
  * http://news.example.com/?story=23
  * http://news.example.com/?story=25
  While the URLs are different, the PHP code execution path is likely identical,
  by tweaking the method in xhprof\_runs.php you can help the frontend be aware
  that these urls are identical.
* Highcharts is used to graph stats over requests for an 
  easy heads up display.

* Easier ways to diff URLs
