<x-app-layout>
    <x-main-card :border="true">
        <style>
            .box {
                width: 50px;
                height: 50px;
                margin: 5px;
                display: inline-block;
                cursor: move;
            }
    
            .sortable-container {
                padding: 10px;
                border: 2px solid var(--main-color);
                display: flex;
                justify-content: space-around;
            }
        </style>
        <div class="flex justify-center">
            <h2 style="padding-top: 30px; padding-bottom:40px; font-family:'Fredoka', Courier, monospace; font-weight:bold; font-size:40px;"> <span class="colored-heading">F</span>arns<span class="colored-heading">W</span>orth <span class="colored-heading">T</span>est</h2>
        </div>
        @php
            function generateRandomArray() {
                $numbers = range(1, 10); // Create an array with numbers from 1 to 10
                $randomArray = [];

                while (count($numbers) > 0) {
                    $randomIndex = array_rand($numbers); // Get a random index from the remaining numbers
                    $randomNumber = $numbers[$randomIndex]; // Get the number at the random index
                    $randomArray[] = $randomNumber; // Add the number to the random array
                    unset($numbers[$randomIndex]); // Remove the number from the remaining numbers
                    $numbers = array_values($numbers); // Re-index the remaining numbers
                }

                return $randomArray;
            }
        @endphp

        @for ($k = 0; $k < 3; $k++)
        <div id="sortable-container-{$k}" class="sortable-container">
            
            @php
                $colors = ['purple', 'red', 'blue'];
                $shadeVariation = 10;

                $randomArray = generateRandomArray();

            @endphp
    
            @foreach ($randomArray as $i)
                @php
                    $boxId = "box-{$i}";
                    $j =  ($i + 5)/4;
                    $shade = $j * $shadeVariation;
                    $hls = 20 + 100*$k;
                    $backgroundColor = "hsl({$hls}, 100%, {$shade}%)";
                @endphp
                <div id="{{ $boxId }}" class="box" draggable="true" ondragstart="dragStart(event)" data-color="{{ $colors[0] }}" ans = "{{ $i }}" style="background-color: {{ $backgroundColor }};">
                </div>
            @endforeach
        </div>
        @endfor

        <script defer>
            let draggable;
            let dropareas = document.querySelectorAll('.sortable-container');
            function dragStart(event) {
                draggable = event.target;
                event.dataTransfer.setData("text/plain", "");
            }

            function getDragAfterElement(container, y) {
                const draggableElements = [...container.querySelectorAll('.box:not(.dragging)')];

                return draggableElements.reduce((closest, child) => {
                    const box = child.getBoundingClientRect();
                    const offset = y - box.left - box.width / 2;
                    if (offset < 0 && offset > closest.offset) {
                        return { offset: offset, element: child };
                    } else {
                        return closest;
                    }
                }, { offset: Number.NEGATIVE_INFINITY }).element;
            }

            dropareas.forEach(droparea => {
                droparea.addEventListener('dragover', e => {
                e.preventDefault();
                const draggableBox = document.querySelector('.dragging');
                if (!draggableBox.nextElementSibling) {
                    droparea.appendChild(draggableBox);
                }
            });

            droparea.addEventListener('dragstart', e => {
                e.target.classList.add('dragging');
            });

            droparea.addEventListener('dragend', e => {
                e.target.classList.remove('dragging');
            });

            droparea.addEventListener('drop', e => {
                e.preventDefault();
                const afterElement = getDragAfterElement(droparea, e.clientX);
                const draggableBox = document.querySelector('.dragging');
                if (afterElement == null) {
                    droparea.appendChild(draggableBox);
                } else {
                    droparea.insertBefore(draggableBox, afterElement);
                }
            });
            });

            


        </script>
    </x-main-card>
</x-app-layout>