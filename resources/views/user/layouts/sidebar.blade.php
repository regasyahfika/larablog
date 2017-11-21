        <!-- technology-right -->
        <div class="col-md-3 technology-right">
                
                
                <div class="blo-top1">

                    <div class="tech-btm">
                        <div class="search-1 wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                            <form action="#" method="post">
                                <input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                                <input type="submit" value=" ">
                            </form>
                        </div>

                        <h4>Kategori </h4>
                        
                        <div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="blog-grid-right">
                            {{-- @foreach ($kategori as $kate)
                                <h5><a href="">{{ $kate->nama }}</a> </h5>
                            @endforeach --}}
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                            
                    </div>
                            
                    <div class="tech-btm">
                    

                        <h4>Popular Posts </h4>
                        {{-- @foreach ($posting as $post) --}}
                        <div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="blog-grid-left">
                                <a href="singlepage.html"><img src="{{ asset('user/images/t2.jpg')}}" class="img-responsive" alt=""></a>
                            </div>
                            <div class="blog-grid-right">
                            
                                <h5><a href="">{{-- {{ $post->judul }} --}}</a> </h5>
                            
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        {{-- @endforeach --}}
                        
                    </div>
                    

                    
                    
                    
                </div>
                
            
        </div>
        <div class="clearfix"></div>
        <!-- technology-right -->