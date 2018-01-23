<?php
namespace oe800\BBCodeTables\Listeners;
use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;
class AddBBCode
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureFormatter::class, [$this, 'addBBCode']);
    }
    public function addBBCode(ConfigureFormatter $event)
    {




$event->configurator->BBCodes->addCustom(
            '[tr23]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6}[/tr23]',
'<table class="table1">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT3}</td>
      <td data-column="{TEXT2}">{TEXT4}</td>
      
     
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
      
     
    </tr>
    
  
   
  </tbody>
</table>'
);


$event->configurator->BBCodes->addCustom(
            '[tr24]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8}[/tr24]',
'<table class="table1">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
     </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT3}</td>
      <td data-column="{TEXT2}">{TEXT4}</td>
      
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
      
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT7}</td>
      <td data-column="{TEXT2}">{TEXT8}</td>
      
    </tr>
   
  </tbody>
</table>'
);


$event->configurator->BBCodes->addCustom(
            '[tr25]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10}[/tr25]',
'<table class="table1">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT3}</td>
      <td data-column="{TEXT2}">{TEXT4}</td>
      
     
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
      
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT7}</td>
      <td data-column="{TEXT2}">{TEXT8}</td>
      
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT9}</td>
      <td data-column="{TEXT2}">{TEXT10}</td>
      
     
    </tr>
   
  </tbody>
</table>'
);


$event->configurator->BBCodes->addCustom(
            '[tr26]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12}[/tr26]',
'<table class="table1">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
     </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT3}</td>
      <td data-column="{TEXT2}">{TEXT4}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT7}</td>
      <td data-column="{TEXT2}">{TEXT8}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT9}</td>
      <td data-column="{TEXT2}">{TEXT10}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT11}</td>
      <td data-column="{TEXT2}">{TEXT12}</td>
    </tr>
  </tbody>
</table>'
);


$event->configurator->BBCodes->addCustom(
            '[tr33]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9}[/tr33]',
'<table class="table1">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT4}</td>
      <td data-column="{TEXT2}">{TEXT5}</td>
      <td data-column="{TEXT3}">{TEXT6}</td>
     
    <tr>
      <td data-column="{TEXT}">{TEXT7}</td>
      <td data-column="{TEXT2}">{TEXT8}</td>
      <td data-column="{TEXT3}">{TEXT9}</td>
     
    </tr>
   
   
   
  </tbody>
</table>'
);


$event->configurator->BBCodes->addCustom(
            '[tr34]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12}[/tr34]',
'<table class="table1">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT4}</td>
      <td data-column="{TEXT2}">{TEXT5}</td>
      <td data-column="{TEXT3}">{TEXT6}</td>
     
    <tr>
      <td data-column="{TEXT}">{TEXT7}</td>
      <td data-column="{TEXT2}">{TEXT8}</td>
      <td data-column="{TEXT3}">{TEXT9}</td>
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT10}</td>
      <td data-column="{TEXT2}">{TEXT11}</td>
      <td data-column="{TEXT3}">{TEXT12}</td>
     
    </tr>
   
   
  </tbody>
</table>'
);



$event->configurator->BBCodes->addCustom(
            '[tr35]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12},{TEXT13},{TEXT14},{TEXT15}[/tr35]',
'<table class="table1">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT4}</td>
      <td data-column="{TEXT2}">{TEXT5}</td>
      <td data-column="{TEXT3}">{TEXT6}</td>
     
    <tr>
      <td data-column="{TEXT}">{TEXT7}</td>
      <td data-column="{TEXT2}">{TEXT8}</td>
      <td data-column="{TEXT3}">{TEXT9}</td>
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT10}</td>
      <td data-column="{TEXT2}">{TEXT11}</td>
      <td data-column="{TEXT3}">{TEXT12}</td>
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT13}</td>
      <td data-column="{TEXT2}">{TEXT14}</td>
      <td data-column="{TEXT3}">{TEXT15}</td>
     
    </tr>
   
  </tbody>
</table>'
);



$event->configurator->BBCodes->addCustom(
            '[tr36]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12},{TEXT13},{TEXT14},{TEXT15},{TEXT16},{TEXT17},{TEXT18}[/tr36]',
'<table class="table1">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT4}</td>
      <td data-column="{TEXT2}">{TEXT5}</td>
      <td data-column="{TEXT3}">{TEXT6}</td>
     
    <tr>
      <td data-column="{TEXT}">{TEXT7}</td>
      <td data-column="{TEXT2}">{TEXT8}</td>
      <td data-column="{TEXT3}">{TEXT9}</td>
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT10}</td>
      <td data-column="{TEXT2}">{TEXT11}</td>
      <td data-column="{TEXT3}">{TEXT12}</td>
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT13}</td>
      <td data-column="{TEXT2}">{TEXT14}</td>
      <td data-column="{TEXT3}">{TEXT15}</td>
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT16}</td>
      <td data-column="{TEXT2}">{TEXT17}</td>
      <td data-column="{TEXT3}">{TEXT18}</td>
     
    </tr>
  </tbody>
</table>'
);



$event->configurator->BBCodes->addCustom(
            '[tr43]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12}[/tr43]',
'<table class="table1">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
      <th>{TEXT4}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
      <td data-column="{TEXT3}">{TEXT7}</td>
      <td data-column="{TEXT4}">{TEXT8}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT9}</td>
      <td data-column="{TEXT2}">{TEXT10}</td>
      <td data-column="{TEXT3}">{TEXT11}</td>
      <td data-column="{TEXT4}">{TEXT12}</td>
    </tr>
  
   
    
  </tbody>
</table>'
);



$event->configurator->BBCodes->addCustom(
            '[tr44]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12},{TEXT13},{TEXT14},{TEXT15},{TEXT16}[/tr44]',
'<table class="table1">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
      <th>{TEXT4}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
      <td data-column="{TEXT3}">{TEXT7}</td>
      <td data-column="{TEXT4}">{TEXT8}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT9}</td>
      <td data-column="{TEXT2}">{TEXT10}</td>
      <td data-column="{TEXT3}">{TEXT11}</td>
      <td data-column="{TEXT4}">{TEXT12}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT13}</td>
      <td data-column="{TEXT2}">{TEXT14}</td>
      <td data-column="{TEXT3}">{TEXT15}</td>
      <td data-column="{TEXT4}">{TEXT16}</td>
    </tr>
   
    
  </tbody>
</table>'
);



$event->configurator->BBCodes->addCustom(
            '[tr45]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12},{TEXT13},{TEXT14},{TEXT15},{TEXT16},{TEXT17},{TEXT18},{TEXT19},{TEXT20}[/tr45]',
'<table class="table1">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
      <th>{TEXT4}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
      <td data-column="{TEXT3}">{TEXT7}</td>
      <td data-column="{TEXT4}">{TEXT8}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT9}</td>
      <td data-column="{TEXT2}">{TEXT10}</td>
      <td data-column="{TEXT3}">{TEXT11}</td>
      <td data-column="{TEXT4}">{TEXT12}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT13}</td>
      <td data-column="{TEXT2}">{TEXT14}</td>
      <td data-column="{TEXT3}">{TEXT15}</td>
      <td data-column="{TEXT4}">{TEXT16}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT17}</td>
      <td data-column="{TEXT2}">{TEXT18}</td>
      <td data-column="{TEXT3}">{TEXT19}</td>
      <td data-column="{TEXT4}">{TEXT20}</td>
    </tr>
    
  </tbody>
</table>'
);




$event->configurator->BBCodes->addCustom(
            '[tr46]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12},{TEXT13},{TEXT14},{TEXT15},{TEXT16},{TEXT17},{TEXT18},{TEXT19},{TEXT20},{TEXT21},{TEXT22},{TEXT23},{TEXT24}[/tr46]',
'<table class="table1">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
      <th>{TEXT4}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
      <td data-column="{TEXT3}">{TEXT7}</td>
      <td data-column="{TEXT4}">{TEXT8}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT9}</td>
      <td data-column="{TEXT2}">{TEXT10}</td>
      <td data-column="{TEXT3}">{TEXT11}</td>
      <td data-column="{TEXT4}">{TEXT12}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT13}</td>
      <td data-column="{TEXT2}">{TEXT14}</td>
      <td data-column="{TEXT3}">{TEXT15}</td>
      <td data-column="{TEXT4}">{TEXT16}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT17}</td>
      <td data-column="{TEXT2}">{TEXT18}</td>
      <td data-column="{TEXT3}">{TEXT19}</td>
      <td data-column="{TEXT4}">{TEXT20}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT21}</td>
      <td data-column="{TEXT2}">{TEXT22}</td>
      <td data-column="{TEXT3}">{TEXT23}</td>
      <td data-column="{TEXT4}">{TEXT24}</td>
    </tr>
  </tbody>
</table>'
);








$event->configurator->BBCodes->addCustom(
            '[lr23]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6}[/lr23]',
'<table class="table2">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT3}</td>
      <td data-column="{TEXT2}">{TEXT4}</td>
      
     
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
      
     
    </tr>
    
  
   
  </tbody>
</table>'
);


$event->configurator->BBCodes->addCustom(
            '[lr24]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8}[/lr24]',
'<table class="table2">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
     </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT3}</td>
      <td data-column="{TEXT2}">{TEXT4}</td>
      
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
      
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT7}</td>
      <td data-column="{TEXT2}">{TEXT8}</td>
      
    </tr>
   
  </tbody>
</table>'
);


$event->configurator->BBCodes->addCustom(
            '[lr25]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10}[/lr25]',
'<table class="table2">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT3}</td>
      <td data-column="{TEXT2}">{TEXT4}</td>
      
     
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
      
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT7}</td>
      <td data-column="{TEXT2}">{TEXT8}</td>
      
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT9}</td>
      <td data-column="{TEXT2}">{TEXT10}</td>
      
     
    </tr>
   
  </tbody>
</table>'
);


$event->configurator->BBCodes->addCustom(
            '[lr26]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12}[/lr26]',
'<table class="table2">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
     </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT3}</td>
      <td data-column="{TEXT2}">{TEXT4}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT7}</td>
      <td data-column="{TEXT2}">{TEXT8}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT9}</td>
      <td data-column="{TEXT2}">{TEXT10}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT11}</td>
      <td data-column="{TEXT2}">{TEXT12}</td>
    </tr>
  </tbody>
</table>'
);


$event->configurator->BBCodes->addCustom(
            '[lr33]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9}[/lr33]',
'<table class="table2">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT4}</td>
      <td data-column="{TEXT2}">{TEXT5}</td>
      <td data-column="{TEXT3}">{TEXT6}</td>
     
    <tr>
      <td data-column="{TEXT}">{TEXT7}</td>
      <td data-column="{TEXT2}">{TEXT8}</td>
      <td data-column="{TEXT3}">{TEXT9}</td>
     
    </tr>
   
   
   
  </tbody>
</table>'
);


$event->configurator->BBCodes->addCustom(
            '[lr34]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12}[/lr34]',
'<table class="table2">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT4}</td>
      <td data-column="{TEXT2}">{TEXT5}</td>
      <td data-column="{TEXT3}">{TEXT6}</td>
     
    <tr>
      <td data-column="{TEXT}">{TEXT7}</td>
      <td data-column="{TEXT2}">{TEXT8}</td>
      <td data-column="{TEXT3}">{TEXT9}</td>
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT10}</td>
      <td data-column="{TEXT2}">{TEXT11}</td>
      <td data-column="{TEXT3}">{TEXT12}</td>
     
    </tr>
   
   
  </tbody>
</table>'
);



$event->configurator->BBCodes->addCustom(
            '[lr35]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12},{TEXT13},{TEXT14},{TEXT15}[/lr35]',
'<table class="table2">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT4}</td>
      <td data-column="{TEXT2}">{TEXT5}</td>
      <td data-column="{TEXT3}">{TEXT6}</td>
     
    <tr>
      <td data-column="{TEXT}">{TEXT7}</td>
      <td data-column="{TEXT2}">{TEXT8}</td>
      <td data-column="{TEXT3}">{TEXT9}</td>
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT10}</td>
      <td data-column="{TEXT2}">{TEXT11}</td>
      <td data-column="{TEXT3}">{TEXT12}</td>
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT13}</td>
      <td data-column="{TEXT2}">{TEXT14}</td>
      <td data-column="{TEXT3}">{TEXT15}</td>
     
    </tr>
   
  </tbody>
</table>'
);



$event->configurator->BBCodes->addCustom(
            '[lr36]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12},{TEXT13},{TEXT14},{TEXT15},{TEXT16},{TEXT17},{TEXT18}[/lr36]',
'<table class="table2">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT4}</td>
      <td data-column="{TEXT2}">{TEXT5}</td>
      <td data-column="{TEXT3}">{TEXT6}</td>
     
    <tr>
      <td data-column="{TEXT}">{TEXT7}</td>
      <td data-column="{TEXT2}">{TEXT8}</td>
      <td data-column="{TEXT3}">{TEXT9}</td>
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT10}</td>
      <td data-column="{TEXT2}">{TEXT11}</td>
      <td data-column="{TEXT3}">{TEXT12}</td>
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT13}</td>
      <td data-column="{TEXT2}">{TEXT14}</td>
      <td data-column="{TEXT3}">{TEXT15}</td>
     
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT16}</td>
      <td data-column="{TEXT2}">{TEXT17}</td>
      <td data-column="{TEXT3}">{TEXT18}</td>
     
    </tr>
  </tbody>
</table>'
);



$event->configurator->BBCodes->addCustom(
            '[lr43]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12}[/lr43]',
'<table class="table2">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
      <th>{TEXT4}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
      <td data-column="{TEXT3}">{TEXT7}</td>
      <td data-column="{TEXT4}">{TEXT8}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT9}</td>
      <td data-column="{TEXT2}">{TEXT10}</td>
      <td data-column="{TEXT3}">{TEXT11}</td>
      <td data-column="{TEXT4}">{TEXT12}</td>
    </tr>
  
   
    
  </tbody>
</table>'
);



$event->configurator->BBCodes->addCustom(
            '[lr44]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12},{TEXT13},{TEXT14},{TEXT15},{TEXT16}[/lr44]',
'<table class="table2">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
      <th>{TEXT4}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
      <td data-column="{TEXT3}">{TEXT7}</td>
      <td data-column="{TEXT4}">{TEXT8}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT9}</td>
      <td data-column="{TEXT2}">{TEXT10}</td>
      <td data-column="{TEXT3}">{TEXT11}</td>
      <td data-column="{TEXT4}">{TEXT12}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT13}</td>
      <td data-column="{TEXT2}">{TEXT14}</td>
      <td data-column="{TEXT3}">{TEXT15}</td>
      <td data-column="{TEXT4}">{TEXT16}</td>
    </tr>
   
    
  </tbody>
</table>'
);



$event->configurator->BBCodes->addCustom(
            '[lr45]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12},{TEXT13},{TEXT14},{TEXT15},{TEXT16},{TEXT17},{TEXT18},{TEXT19},{TEXT20}[/lr45]',
'<table class="table2">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
      <th>{TEXT4}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
      <td data-column="{TEXT3}">{TEXT7}</td>
      <td data-column="{TEXT4}">{TEXT8}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT9}</td>
      <td data-column="{TEXT2}">{TEXT10}</td>
      <td data-column="{TEXT3}">{TEXT11}</td>
      <td data-column="{TEXT4}">{TEXT12}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT13}</td>
      <td data-column="{TEXT2}">{TEXT14}</td>
      <td data-column="{TEXT3}">{TEXT15}</td>
      <td data-column="{TEXT4}">{TEXT16}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT17}</td>
      <td data-column="{TEXT2}">{TEXT18}</td>
      <td data-column="{TEXT3}">{TEXT19}</td>
      <td data-column="{TEXT4}">{TEXT20}</td>
    </tr>
    
  </tbody>
</table>'
);




$event->configurator->BBCodes->addCustom(
            '[lr46]{TEXT},{TEXT2},{TEXT3},{TEXT4},{TEXT5},{TEXT6},{TEXT7},{TEXT8},{TEXT9},{TEXT10},{TEXT11},{TEXT12},{TEXT13},{TEXT14},{TEXT15},{TEXT16},{TEXT17},{TEXT18},{TEXT19},{TEXT20},{TEXT21},{TEXT22},{TEXT23},{TEXT24}[/lr46]',
'<table class="table2">
  <thead>
    <tr>
      <th>{TEXT}</th>
      <th>{TEXT2}</th>
      <th>{TEXT3}</th>
      <th>{TEXT4}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="{TEXT}">{TEXT5}</td>
      <td data-column="{TEXT2}">{TEXT6}</td>
      <td data-column="{TEXT3}">{TEXT7}</td>
      <td data-column="{TEXT4}">{TEXT8}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT9}</td>
      <td data-column="{TEXT2}">{TEXT10}</td>
      <td data-column="{TEXT3}">{TEXT11}</td>
      <td data-column="{TEXT4}">{TEXT12}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT13}</td>
      <td data-column="{TEXT2}">{TEXT14}</td>
      <td data-column="{TEXT3}">{TEXT15}</td>
      <td data-column="{TEXT4}">{TEXT16}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT17}</td>
      <td data-column="{TEXT2}">{TEXT18}</td>
      <td data-column="{TEXT3}">{TEXT19}</td>
      <td data-column="{TEXT4}">{TEXT20}</td>
    </tr>
    <tr>
      <td data-column="{TEXT}">{TEXT21}</td>
      <td data-column="{TEXT2}">{TEXT22}</td>
      <td data-column="{TEXT3}">{TEXT23}</td>
      <td data-column="{TEXT4}">{TEXT24}</td>
    </tr>
  </tbody>
</table>'
);


















    }
}
