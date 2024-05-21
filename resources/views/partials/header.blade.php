<header>
   <section class="header">
        <div class="nav-container">
            <div class="nav-wrapper">
                <nav>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('comics')}}">Comics</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        
    </section>
</header>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .header{
        border: 1px solid black;
        height: 80px;
        display: flex;
        align-items: center;
        padding: 20px;
        
    }

    a{
        text-decoration: none;
        color: black;
        margin: 0 10px;
    }
</style>