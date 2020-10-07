@section('title')
    blog
@endsection
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="my-panel cmt-80 p-4 mb-4">
            <p class="blog-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam sequi quasi quisquam
                reiciendis repellat.</p>
            <div class="d-flex justify-content-center">
                <img class="blog-img" src="/images/header3.jpg" alt="">
            </div>
            <p class="m-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis non aperiam culpa?
                Distinctio officia,
                nulla id ducimus omnis ratione facilis harum error similique. Rem tempora perspiciatis reprehenderit? Nisi
                asperiores reiciendis sunt mollitia dicta corrupti ab omnis aut minus? Quisquam earum velit ut voluptatum
                cumque quo saepe autem quis, inventore delectus odit magnam eaque eius necessitatibus cum non veniam nostrum
                ipsam maxime reprehenderit beatae totam quod? Consequatur ipsa nisi enim. Nobis modi recusandae accusamus
                adipisci similique consectetur quos nisi quas, sapiente facilis quasi perspiciatis esse inventore magni
                temporibus nostrum odio animi possimus alias? Suscipit nulla eos doloribus tempore similique nemo sint!
                Distinctio, maxime alias velit, quidem sequi voluptatibus tenetur dignissimos iste et libero perferendis,
                aliquam dolorum illum culpa a? Cum quo mollitia accusantium culpa dolorem dolores quis, vitae quae
                voluptatem consequuntur pariatur molestias magni iste corporis numquam enim repellendus nulla iusto. Numquam
                quaerat commodi dolorum officia nostrum modi quisquam voluptate, repellendus eaque autem corrupti
                consequuntur quidem illum debitis! Consequuntur libero maxime necessitatibus natus beatae ea iure dicta
                voluptatem labore explicabo nisi reprehenderit veniam deserunt nostrum quod laudantium, corporis a saepe qui
                tempore distinctio! Eum rem id dolores dignissimos consequuntur omnis animi reiciendis iure laborum ducimus,
                iste tenetur natus? Commodi minus porro fugit beatae nobis magni perspiciatis maiores recusandae odio
                voluptas? Necessitatibus nisi ex molestiae vitae, reprehenderit obcaecati, illo culpa eligendi at fugiat
                corrupti sunt est quam ullam modi saepe alias. Perferendis et ut amet porro laborum sit, ipsa quos cum
                voluptates perspiciatis. Nisi suscipit voluptate atque esse harum delectus nihil. Rerum repudiandae adipisci
                vero nemo saepe! Adipisci atque, tempora amet, inventore assumenda ipsam autem nulla modi esse, quod qui
                dignissimos aliquid perferendis nostrum neque? Eius explicabo beatae placeat architecto fugit, nesciunt
                repudiandae, repellendus, labore incidunt mollitia earum autem. Quidem rerum nihil nam explicabo non
                suscipit culpa eaque provident aperiam repellendus ut hic maiores deserunt eius incidunt ipsum amet
                laudantium ducimus animi, saepe quo nisi. Dolores, vero repellendus ab commodi nemo, ex error alias totam
                labore eligendi deserunt sunt cum nisi aperiam accusantium ipsa dolorem iure? Ducimus odio sapiente quam
                quidem inventore facilis quasi labore ipsum animi neque autem, similique atque vel iusto possimus cum dolor
                adipisci suscipit, deleniti incidunt molestias repellat. Soluta iste cupiditate, quam cumque libero minima
                dolor sint eius veritatis error ipsa inventore voluptatibus sunt aliquid consequuntur officiis distinctio
                eum impedit assumenda! Totam, expedita magnam officiis perferendis quia provident modi quam asperiores
                repellendus pariatur nihil exercitationem quasi velit ratione!</p>
        </div>
        {{-- comment --}}
        <div class="comment-session">
            <div class="my-panel mb-4 p-4">
                <p class="page-title">Komentar</p>
                <div class="row m-4 p-4 comment-list">
                    <div class="col-12">
                        <img class="profile-img" src="images/header1.jpg" alt=""><span
                            class="text-middle ml-2">Anonymous</span>
                    </div>
                    <div class="col-12 ml-4 pt-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus rerum, eveniet laborum placeat
                            itaque ullam nisi aliquid at recusandae facilis maiores quia libero, beatae corrupti soluta eius
                            repudiandae perspiciatis illo.</p>
                    </div>
                    <div class="col-12 ">
                        <a class="float-right" href=""><button class="btn btn-danger">
                                Hapus Komentar
                            </button></a>
                    </div>
                </div>
                <form action="">
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <a href="">
                        <button class="btn btn-orange text-white float-right">submit</button>
                    </a>
                </form>
            </div>

        </div>
    </div>
@endsection
