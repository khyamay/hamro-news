           $(document).ready(function () {
          $('#test').rssfeed('http://www.myrepublica.com/portal/news_rss.php?news_category_id=15', {
            limit: 4,
            date:false,
            media:true,
            content:true,
                  snippet:true,
                  });
         });

         $(document).ready(function()
          {$('#test1').rssfeed('http://www.nagariknews.com/opinion.feed?type=rss',{
            limit:5,
            date:true,
            media:true,
            content:true,
            snippet:true,
          });

          });

         
        $(document).ready(function(){
         $('#divRss').FeedEk({
            FeedUrl : 'http://www.google.com/reader/public/atom/user%2F13238026182451499273%2Fstate%2Fcom.google%2Falerts%2F3809551903130657252',
            MaxCount : 4,
            ShowDesc : false,
            ShowPubDate:false,
           });

         $('#divRss1').FeedEk({
            FeedUrl : 'http://www.myrepublica.com/portal/news_rss.php?news_category_id=14',
            MaxCount : 4,
            ShowDesc : false,
            ShowPubDate:false,
           });

        $('#divRss2').FeedEk({
            FeedUrl : 'http://www.google.com/reader/public/atom/user%2F13238026182451499273%2Fstate%2Fcom.google%2Falerts%2F7006395527842981256',
            MaxCount : 4,
            ShowDesc : false,
            ShowPubDate:false,
           });
        $('#divRss3').FeedEk({
            FeedUrl : 'http://www.myrepublica.com/portal/news_rss.php?news_category_id=15',
            MaxCount : 4,
            ShowDesc : false,
            ShowPubDate:false,
           });
       	$('#divRss4').FeedEk({
               FeedUrl : 'http://www.myrepublica.com/portal/news_rss.php?news_category_id=15',
               MaxCount : 5,
               ShowDesc : false,
               ShowPubDate:false,
              });
        $('#divRss5').FeedEk({
                  FeedUrl : 'http://www.myrepublica.com/portal/news_rss.php?news_category_id=14',
                  MaxCount : 8,
                  ShowDesc : false,
                  ShowPubDate:false,
                 });
         $('#divRss6').FeedEk({
                  FeedUrl : 'http://pipes.yahoo.com/pipes/pipe.run?_id=fb3d35e87d3d64e90cc4b1e24da22a78&_render=rss',
                  MaxCount : 8,
                  ShowDesc : false,
                  ShowPubDate:false,
                 });

         $('#divRss7').FeedEk({
            FeedUrl : 'http://nepalipatra.com/news/rss/feed.php?lang_id=2&category=8',
            MaxCount : 5,
            ShowDesc : false,
            ShowPubDate:false,
           });

         $('#divRss8').FeedEk({
            FeedUrl : 'http://nepalipatra.com/news/rss/feed.php?lang_id=2&category=18',
            MaxCount : 5,
            ShowDesc : false,
            ShowPubDate:false,
           });

        $('#divRss9').FeedEk({
            FeedUrl : 'http://nepalipatra.com/news/rss/feed.php?lang_id=2&category=6',
            MaxCount : 5,
            ShowDesc : false,
            ShowPubDate:false,
           });
        $('#divRss10').FeedEk({
            FeedUrl : 'http://nepalipatra.com/news/rss/feed.php?lang_id=2&category=9',
            MaxCount : 5,
            ShowDesc : false,
            ShowPubDate:false,
           });
        $('#divRss10').FeedEk({
               FeedUrl : 'http://khabar.hknepal.net/category/opinion/feed',
               MaxCount : 5,
               ShowDesc : false,
               ShowPubDate:false,
              });
         $('#divRss11').FeedEk({
            FeedUrl : 'http://nepalipatra.com/news/rss/feed.php?lang_id=2&category=1',
            MaxCount : 4,
            ShowDesc : false,
            ShowPubDate:false,
           });

         $('#divRss12').FeedEk({
            FeedUrl : 'http://www.google.com/reader/public/atom/user%2F13238026182451499273%2Fstate%2Fcom.google%2Falerts%2F7006395527842981256',
            MaxCount : 4,
            ShowDesc : false,
            ShowPubDate:false,
           });

        $('#divRss13').FeedEk({
            FeedUrl : 'http://khabar.hknepal.net/feed',
            MaxCount : 4,
            ShowDesc : false,
            ShowPubDate:false,
           });
        $('#divRss14').FeedEk({
            FeedUrl : 'http://www.myrepublica.com/portal/news_rss.php?news_category_id=15',
            MaxCount : 4,
            ShowDesc : false,
            ShowPubDate:false,
           });
      });


  